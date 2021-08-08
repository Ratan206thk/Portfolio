function opening() {
    document.querySelector('div.hello').style.opacity = 0.8;
    document.querySelector('div.box').style.position = 'fixed';
    document.querySelector('div.hello').style.visibility = "visible";
}
function closing() {
    document.querySelector('div.hello').style.opacity = 0;
    document.querySelector('div.box').style.position = 'absolute';
    document.querySelector('div.hello').style.visibility = "hidden";
}