import { Route, Routes } from "react-router-dom";
import Home from "../Home";
import IndexPlanets from "../Planets/Index";

const RouterOutlet = () => {
  return (
    <Routes>
      <Route path="/" element={<Home />} />
      <Route path="/planetes" element={<IndexPlanets />} />
    </Routes>
  );
};

export default RouterOutlet;
