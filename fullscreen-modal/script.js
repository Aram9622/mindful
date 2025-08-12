const openEls = document.querySelectorAll("[data-open]");
const closeEls = document.querySelectorAll("[data-close]");
const isVisible = "is-visible";

for (const el of openEls) {
    el.addEventListener("click", function () {
        const modalId = this.dataset.open;
        document.getElementById(modalId).classList.add(isVisible);
        $("#"+modalId).css("display", "flex")
        $("body").css("overflow", "hidden");
        getStaffData(this.dataset.id).then(function (res){
            $(".modal-content-custom").html(res)
        })
    });
}

for (const el of closeEls) {
    el.addEventListener("click", function () {
        this.parentElement.parentElement.classList.remove(isVisible);
        $("body").css("overflow", "visible");
    });
}

document.addEventListener("click", (e) => {
    if (e.target == document.querySelector(".modal.is-visible")) {
        document.querySelector(".modal.is-visible").classList.remove(isVisible);
    }
});

document.addEventListener("keyup", (e) => {
    // if we press the ESC
    if (e.key == "Escape" && document.querySelector(".modal.is-visible")) {
        document.querySelector(".modal.is-visible").classList.remove(isVisible);
    }
});

 async function getStaffData(id) {
    try {
        const response =  await fetch(
            `/staff-data.php`,
            {
                method: 'POST',
                headers: {
                    // So PHP knows we want JSON, and browsers that cache
                    // can vary correctly by Accept header.
                    'Accept': 'text/html',
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams({ id })
            }
        );
        return await response.text();
    } catch (err) {
        console.error('Fetch failed:', err);
        // Optionally re‑throw or return a fallback value
    }
}