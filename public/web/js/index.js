$(document).ready(function () {

    let varButton = $('#run-button');
    let codeArea = $('#code-area');
    let resultArea = $('#result-area');


    varButton.on('click', function (event) {

        event.preventDefault();

        if (codeArea && codeArea.text().length > 0) {

            var code = codeArea.text();
            code = JSON.stringify({code: code});
            console.log('code ', code);

            $.ajax({
                method: "POST",
                url: "execute",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                data: code
            }).done(function (result) {
                $(resultArea).text(result);
            });
        }
    });

});