import React from "react";
import { Link } from "react-router-dom";
import { displayImage } from "../utils";

const Logo = () => {
  return (
    <Link to="/">
      <img
        className="logo"
        src={displayImage("boobaF")}
        alt="Logo du site : Booba Fett"
      />
    </Link>
  );
};
export default Logo;
