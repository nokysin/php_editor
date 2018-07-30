$(document).ready(function () {

    let varButton = $('#run-button');
    let codeArea = $('#code-area');
    let resultArea = $('#result-area');


    varButton.on('click', function (event) {

        event.preventDefault();

        if (codeArea && codeArea.text().length > 0) {

            const data = { 'code' : codeArea.text() };

            $.ajax({
                method: "POST",
                url: "execute",
                contentType: "application/x-www-form-urlencoded; charset=utf-8",
                data: data,
            }).done(function (result) {
                $(resultArea).text(result);
            });
        }
    });

});