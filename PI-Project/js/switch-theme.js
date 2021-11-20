function switchTheme() {
        sheet = document.getElementById("dark-theme");
        if (sheet.disabled) {
                sheet.disabled=false;
        }
        else {
                sheet.disabled=true;
        }
}
