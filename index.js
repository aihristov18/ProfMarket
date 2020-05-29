function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function fadeIn(previouslyGeneratedNumber) {
    tBox = $("#fadeInTextBox");
    var texts = ["uga", "buga", "kef", "nekef", "staa", "nestaa", "ima", "nqma", "sluchka", "ivan"];
    var random = Math.floor(Math.random() * 10);
    if (random != previouslyGeneratedNumber) {
        tBox.html('"'+texts[random]+'"');
        $("#fadeInTextBox")
            .addClass("FadeInClass")
            console.log("add fade in")
            $("#fadeInTextBox")
            .one("animationend", ()=>{
                $("#fadeInTextBox")
                    .removeClass("FadeInClass")
                    console.log("remove fade in")
                    $("#fadeInTextBox")
                    .addClass("FadeOutClass")
                    console.log("add fade out")
                    $("#fadeInTextBox")
                    .one("animationend",()=>{
                        $("#fadeInTextBox").removeClass("FadeOutClass");
                        console.log("remove fade out")
                    })
                fadeIn(random);
            })
    }
    else
        fadeIn(random);
}