import CreateRequest from 'createRequest';

const feedback = document.getElementById('feedback');

(function () {
    let request = new CreateRequest('http://localhost/readComments.php','');
    request.sendRequest(function (data) {
        feedback.innerHTML+=data;
    })
})();
