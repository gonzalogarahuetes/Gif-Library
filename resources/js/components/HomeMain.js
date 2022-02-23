import React from "react";
import reactDom from "react-dom";

function HomeMain() {
    return <div className="home-flex">Hola</div>;
}

export default HomeMain;

reactDom.render(<HomeMain />, document.getElementById("home-main"));
