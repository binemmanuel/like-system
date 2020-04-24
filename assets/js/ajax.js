function ajax(method, server, element, url = '') {
    let request = new XMLHttpRequest
    request.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.querySelector(element).innerHTML = this.responseText
        }
    }
    
    if (method === 'POST') {
        request.open(method, server, true)
        request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
        request.send(url)
    } else {
        // Create a URL if url is not empty.
        if (url !== '') {git
            url = server + '?' + url
        }
        
        request.open(method, url, true)
        request.send()
    }
}
