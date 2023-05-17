async function setImage(anime) {
    var api = "https://api.jikan.moe/v4/anime?q=" + anime + "&page=1";
    const res = await fetch(api);
    const data = await res.json();
    //console.log(data);
    var veri = data.data[0];

    document.getElementById("animefoto").innerHTML =
        "<img src=" + veri.images.jpg.image_url + ">";

    document.getElementById("animeadi").innerHTML =
        "<p> Anime adi : " + veri.title + "</p>";

    document.getElementById("animebolum").innerHTML =
        "<p> Bolum sayisi : " + veri.episodes + "</p>";

    document.getElementById("animescore").innerHTML =
        "<p> Score : " + veri.score + "</p>";

    document.getElementById("animeder").innerHTML =
        "<p> Derecelendirme : " + veri.rating + "</p>";

    document.getElementById("animebas").innerHTML =
        "<p> Baslama tarihi : " + veri.aired.from + "</p>";

    document.getElementById("animebit").innerHTML =
        "<p> Bitis tarihi : " + veri.aired.to + "</p>";

    return data;
}

function addElement(data) {
    let parentDiv = document.getElementById("listeler");

    let div_elem = document.createElement("div");
    div_elem.setAttribute("class", "col-xl-2 col-lg-3 col-md-4 col-sm-6");
    div_elem.setAttribute("id", "ust");

    div_elem.innerHTML = `
        <div id="ana" >
            <div>
                <img src="${data.images.jpg.image_url}" alt="">
            </div>

            <div>
                <p style="font-weight: bold;">${data.title}</p>
            </div>
        </div>`;
    parentDiv.appendChild(div_elem);
}

async function search() {
    var formdata = document.getElementById("form").value;
    //console.log(formdata)
    let liste = [];

    try {
        liste = await setImage(formdata);
    } catch {
        openModal();
        console.log("Err");
    }

    let silinecek = document.getElementById("ust");

    if (silinecek) {
        while (silinecek) {
            silinecek.remove();
            console.log("ehe");
            silinecek = document.getElementById("ust");
        }
    }
    liste.data.map((element) => {
        addElement(element);
    });
    /*for (let i = 1; i < liste.data.length; i++) {
        addElement(liste.data[i]);
    }*/
}

function openModal() {
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal

    modal.style.display = "flex";
    modal.style.alignItems = "center";
    modal.style.justifyItems = "center";

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
}

var input = document.getElementById("form");

// Execute a function when the user presses a key on the keyboard
input.addEventListener("keypress", function (event) {
    // If the user presses the "Enter" key on the keyboard
    if (event.key === "Enter") {
        // Cancel the default action, if needed
        event.preventDefault();
        // Trigger the button element with a click
        document.getElementById("myBtn").click();
    }
});
