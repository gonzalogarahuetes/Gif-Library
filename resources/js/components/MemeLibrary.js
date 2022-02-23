import React from "react";
import reactDom from "react-dom";

function MemeLibrary() {
    return <p>Hola</p>;
}

export default MemeLibrary;

reactDom.render(<MemeLibrary />, document.getElementById("wrapper"));
