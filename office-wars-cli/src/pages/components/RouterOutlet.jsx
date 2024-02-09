import { Route, Routes } from "react-router-dom";
import Home from "../Home";
import IndexPlanets from "../Planets/IndexPlanets";
import Planet from "../Planets/Planet";

const RouterOutlet = () => {
  return (
    <Routes>
      <Route path="/" element={<Home />} />
      <Route path="/planetes" element={<IndexPlanets />} />
      <Route path={`/planetes/:slug`} element={<Planet />} />
    </Routes>
  );
};

export default RouterOutlet;
