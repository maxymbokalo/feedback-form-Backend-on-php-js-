import CreateRequest from 'createRequest';

(function () {
    const form = document.forms[0];
    form.onsubmit = function (event) {
        event.preventDefault();
        const formData = new FormData(form);

        let request = new CreateRequest('http://localhost/addComment.php',formData);
        request.sendRequest(function (data) {
            console.log(data);
        })
    };
})();

