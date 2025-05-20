<div class="flex flex-col gap-12">
    <div id="comsdiv" class="flex flex-col gap-8">

    </div>
    <form id="comform" class="flex flex-col gap-8">
        <input class="relative bg-black text-white rounded-lg p-4" id="name" name="name" type="text" placeholder="Nom d'utilisateur">
        <textarea class="relative bg-black text-white rounded-lg p-4" name="body" id="body" placeholder="Commentaire"></textarea>
        <input class="relative bg-black text-white rounded-lg p-4 cursor-pointer" type="submit" value="Ajouter un commentaire">
    </form>
    <script>
    window.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("comform"), comsdiv = document.getElementById("comsdiv");
        if (form && comsdiv) {
            form.addEventListener("submit", function (event) {
            event.preventDefault();
            const name = String(this.name.value || ""), body = String(this.body.value || "");
            if (name.length > 0 && body.length > 0) {
                localStorage.setItem(name, body)
                const div = document.createElement("div");
                div.classList.value = "flex flex-col gap-2";
                const nameEl = document.createElement("p");
                nameEl.textContent = name;
                nameEl.classList.value = "relative bg-blue-500 text-white rounded-lg p-2";
                const bodyEl = document.createElement("p");
                bodyEl.textContent = body;
                bodyEl.classList.value = "relative bg-blue-500 text-white rounded-lg p-2";
                div.appendChild(nameEl);
                div.appendChild(bodyEl);
                comsdiv.prepend(div);
                form?.reset?.()
            }
        });
        function allStorage() {

    var archive = {}, // Notice change here
        keys = Object.keys(localStorage),
        i = keys.length;

    while ( i-- ) {
        archive[ keys[i] ] = localStorage.getItem( keys[i] );
    }

    return archive;
}
        for (const [key, value] of Object.entries(allStorage())) {
                const div = document.createElement("div");
                div.classList.value = "flex flex-col gap-2";
                const nameEl = document.createElement("p");
                nameEl.textContent = key;
                nameEl.classList.value = "relative bg-blue-500 text-white rounded-lg p-2";
                const bodyEl = document.createElement("p");
                bodyEl.textContent = value;
                bodyEl.classList.value = "relative bg-blue-500 text-white rounded-lg p-2";
                div.appendChild(nameEl);
                div.appendChild(bodyEl);
                comsdiv.appendChild(div)
        }
    }
})
    </script>
</div>