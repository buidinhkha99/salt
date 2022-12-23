import React from "react";
import { render } from "react-dom";
import { App } from "@inertiajs/inertia-react";
import { InertiaProgress } from "@inertiajs/progress";

import "../css/app.css";

InertiaProgress.init({
  // The color of the progress bar.
  color: "#29d",

  // Whether to include the default NProgress styles.
  includeCSS: true,

  // Whether the NProgress spinner will be shown.
  showSpinner: true
});

const el = document.getElementById("app");

render(
  <App
    initialPage={JSON.parse(el.dataset.page)}
    resolveComponent={(name) => require(`./components/${name}`).default}
  />,
  el
);