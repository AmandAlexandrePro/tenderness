window.addEventListener("DOMContentLoaded", function () {
    let timeout, changed = false;
    const forms = [...document.querySelectorAll("form")];
    for (let form of forms) {
        let quantiter = form.querySelector("#quantiter"), oldValue = 0;
        if ((quantiter instanceof HTMLElement) == true) quantiter.addEventListener("focus", function () {
            return oldValue = Number(quantiter.value)
        }, {
            once: true
        });
        form.addEventListener("change", function change () {
            if (changed != true) {
                for (const frm of forms.filter(function (frm) {
                    return frm != form
                })) {
                    let qtt = frm.querySelector("#quantiter");
                    if ((qtt instanceof HTMLElement) == true) qtt.disabled = true
                    frm.removeEventListener("change", change)
                }
            };
            clearTimeout(timeout);
            changed = true;
            timeout = setTimeout(function () {
                if (typeof (form?.quantiter?.value) == "string") form.quantiter.value = (Number(form.quantiter.value) - oldValue)
                oldValue = 0;
                return form.submit()
            }, 500)
        })
    }
})