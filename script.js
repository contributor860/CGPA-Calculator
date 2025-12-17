jQuery($=>{
    $("#cgpaForm").on("submit", e=>{
        e.preventDefault();
        $("#cgpaResult").hide().html("Calculating...").fadeIn();
        $.post(cgpaData.url,{
            action:"cgpa",
            Sum:$("input[name=Sum]").val(),
            Sem:$("input[name=Sem]").val(),
            nonce:cgpaData.nonce
        }, r=>{
            $("#cgpaResult").removeClass('mycgpa-result mycgpa-error');
            if(r.success){
                $("#cgpaResult").addClass('mycgpa-result').html(r.data).fadeIn();
                $("#cgpaForm")[0].reset();
            } else {
                $("#cgpaResult").addClass('mycgpa-error').html(r.data).fadeIn();
            }
        });
    });
});
