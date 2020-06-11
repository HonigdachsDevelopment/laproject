// Custom scripts

/** MEDIAQUERY USER PREFERS
 *
 *  HANDLER IN PSEUDO CODE:</b>
 continuesly (whenever client browser loads a component or page)
 awaits matching of properties in "mediaQueryList" object in client browser
 for => string =  "prefers-color-scheme: dark" =>
 in case of
 */


/**
 *
 *
 *
 * @type {Element}
 */

const checkbox = document.querySelector('input[type="checkbox"]#toggleDM');
const root = document.querySelector("html");

function checkSystem() {
    /**
     *
     *  matchMedia(query: string) watches the mediaQuery Object Array and
     *  and responds as soon the property "prefers-color-scheme" declares
     *  "prefers-color-scheme: dark"
     *
     *
     * @type {boolean}
     */

    const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
    /**
     *
     * after=  matching woth "prefers-color-scheme: dark
     * ur constant prefersDark becomes true/valid
     */
    if (prefersDark) {
        /**
         * and if prefersDark is valid
         * we want the system to root our css
         * to add the class DarkMode to our root
         * classlist
         */
        root.classList.add("DarkMode");
    } else {
        root.classList.remove("DarkMode")
    }
}

function initDarkMode() {
    checkSystem();

    if (root.classList.contains("DarkMode")) {
        checkbox.setAttribute("checked", true);
    }

    checkbox.addEventListener("change", (event) => {
        root.classList.toggle("DarkMode");
        const isDarkMode = root.classList.contains("DarkMode");
        checkbox.setAttribute("checked", isDarkMode)
    });
}


initDarkMode();
