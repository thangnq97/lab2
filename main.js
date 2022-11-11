let menu = document.querySelector('#menu')
let menuBtn = document.querySelector('#menu-btn')
let form = document.querySelector('#form')
let email = document.querySelector('#email')

menuBtn.addEventListener('click', () => {
    menu.classList.toggle('invisible')
})

function check() {
    if(email.value.trim().indexOf('.') === -1 || email.value.trim().indexOf('@') === -1) {
        alert('Email invalid!')
        return false
    } else {
        alert('Success!')
    }
    return true
}

if(form) {
    form.addEventListener('submit', (e) => {
        e.preventDefault()
        if(check()){
            email.value = ''
        }
    })
}