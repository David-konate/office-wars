import React from "react";
import { Link } from "react-router-dom";

const Logo = () => {
  return (
    <Link to="/">
      <img
        className="logo"
        src="/images/boobaF.jpg"
        alt="Logo du site : Booba Fett"
      />
    </Link>
  );
};
export default Logo;
