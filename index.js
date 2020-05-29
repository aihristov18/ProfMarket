function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function fadeIn(previouslyGeneratedNumber) {
    tBox = $("#fadeInTextBox");
    var texts = ['“If you can DREAM it, you can DO it.” – Walt Disney', '"Success is how high you bounce when you hit bottom.” – General George Patton', '“Choose a job you love, and you will never have to work a day in your life.” – Confucius', '“If it scares you, it might be a good thing to try.” – Seth Godin', '“Opportunities don’t happen, you create them.” – Chris Grosser', '"When one door is closed, don’t you know that many more are open.” – Bob Marley"', '“A person who never made a mistake never tried anything new.” – Albert Einstein'];
    var random = Math.floor(Math.random() * 7);
    if (random != previouslyGeneratedNumber) {
        tBox.html(texts[random]);
        await sleep(3000);
        fadeIn(random);
    }
    else
        fadeIn(random)
}
function changeGlass(direction)
{
    if(direction)
    {
        $("#glass").attr("src","gray_Lupa.png");
    }
    else
    {
        $("#glass").attr("src","white_Lupa.png");
    }
}