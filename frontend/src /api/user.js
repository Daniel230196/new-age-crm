import axios from "axios";

// @TODO
const config = {
    host: "http://localhost",
    token: getExistingToken(),
}

let token = 'test-token'

const headers = () => {
    let token = getExistingToken()
    return { "Authorization": `token ${token}` };
}

export default {
    authByPassword(login, password) {
        return axios.post("/api/user/login", {login, password}, {
            baseURL: config.host,
        })
    }
}

function getExistingToken() {
    let storage = window.localStorage
    return storage.getItem('token')
}