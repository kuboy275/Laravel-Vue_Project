export function callApiFetch() {
    return axios.get('http://127.0.0.1:8000/api/products')
        .then(response => response)
        .catch(error => error)
}