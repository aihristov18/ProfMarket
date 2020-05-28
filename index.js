function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function fadeIn(previouslyGeneratedNumber) {
    var texts = ["uga", "buga", "kef", "nekef", "staa", "nestaa", "ima", "nqma", "sluchka", "ivan"];
    var random = Math.floor(Math.random() * 10);
    if (random != previouslyGeneratedNumber) {
        console.log(random);
        $("#fadeInTextBox").html(texts[random]);
        console.log(texts[random]);
        console.log("dadada");
        await sleep(10000);
        fadeIn();
    }
}