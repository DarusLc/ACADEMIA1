const isValidEmail = (email) => {
    const regex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    return regex.test(String(email).toLowerCase())
}

const inputs = document.querySelector('inputs[name="name"]')
console.log(inputs)

