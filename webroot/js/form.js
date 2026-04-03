document.addEventListener("DOMContentLoaded", () => {
    const status = document.getElementById("options");
    const family = document.getElementById("famille");
    const inputF = document.getElementById("familysize");

    status.addEventListener("change", (e) => {
        if (e.target.value === "famille") {
            family.style.display = "block";
        } else {
            family.style.display = "none";
            if (inputF) {
                inputF.value = "";
            }
        }
    });

    window.etape1 = () => {
        document.getElementById("etape_1").style.display = "block";
        document.getElementById("etape_2").style.display = "none";
        document.getElementById("etape_3").style.display = "none";
    };

    window.etape2 = () => {
        document.getElementById("etape_1").style.display = "none";
        document.getElementById("etape_2").style.display = "block";
        document.getElementById("etape_3").style.display = "none";
    };

    window.etape3 = () => {
        document.getElementById("etape_1").style.display = "none";
        document.getElementById("etape_2").style.display = "none";
        document.getElementById("etape_3").style.display = "block";
    };
});
