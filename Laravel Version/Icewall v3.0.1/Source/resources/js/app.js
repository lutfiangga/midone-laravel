import "./bootstrap";
import "./vendor/dom";
import "./vendor/tailwind-merge";
import "./vendor/svg-loader";

// Load static files
import.meta.glob(["../images/**"]);