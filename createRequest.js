export default class CreateRequest {
    constructor(url,value){
        this.url = url;
        this.value = value;
    }
    sendRequest(success) {
        let xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        xhr.open('POST', this.url);
        xhr.onreadystatechange = function () {
            if (xhr.readyState > 3) {
                success(xhr);
            }
        };
        xhr.send(this.value);
        return xhr;
    }
}