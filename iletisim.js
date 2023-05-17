let uyari = document.getElementById("uyari");
let form1 = document.getElementById("form");
let regex1 = /^[\w.-]+@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,}$/;
let regex2 = /^(0[1-9]|[1-7][0-9]|8[01])\d{3}$/;
let uyarilar = "";
let oyun = document.getElementById("voyun");
let anime = document.getElementById("anime");
let film = document.getElementById("film");
let gezi = document.getElementById("gezi");
let kitap = document.getElementById("kitapok");
var ddl = document.getElementById("egitimduzey");

form1.addEventListener("submit", (e) => {
    let name1 = document.getElementById("isim");
    let surname = document.getElementById("soyisim");
    let mail = document.getElementById("email").value;
    let selectedValue = ddl.options[ddl.selectedIndex].value;
    let postakodu = document.getElementById("postakodu").value;
    let adres1 = document.getElementById("adres1");
    uyari.innerText = " ";
    uyarilar = "";

    if (name1.value.length == 0) {
        uyarilar += "İsim:      İsim kısmını lütfen doldurunuz. \n ";
    }
    if (surname.value.length == 0) {
        uyarilar += "Soyisim:   Soyisim kısmını lütfen doldurunuz. \n ";
    }
    if (regex1.test(mail) == false) {
        uyarilar += "Mail:      Lütfen geçerli bir email adresi giriniz. \n ";
    }

    if (
        !(
            oyun.checked ||
            anime.checked ||
            film.checked ||
            gezi.checked ||
            kitap.checked
        )
    ) {
        uyarilar += "Hobiler:   Lütfen hobi seçimini yapınız. \n ";
    }

    if (selectedValue == "Seciniz") {
        uyarilar +=
            "Egitim Düzeyi:   Lütfen eğitim düzeyi seçimini yapınız. \n ";
    }
    if (adres1.value.length == 0) {
        uyarilar += "Adres:      Adres kısmını lütfen doldurunuz. \n ";
    }
    if (regex2.test(postakodu) == false) {
        uyarilar +=
            "Posta Kodu:      Lütfen geçerli bir posta kodu  giriniz. \n ";
    }

    if (uyarilar.length > 0) {
        uyari.innerText = uyarilar;

        openModal();

        e.preventDefault();
    }
});

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
