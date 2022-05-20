import { Routes, Route } from "react-router-dom";
import Home from "./pages/Home";
import PageControleur from "./pages/PageControleur";
import PageCommercial from "./pages/PageCommercial";

function App() {
  return (
    <Routes>
      <Route path="/" exact element={<Home />} />
      <Route path="/controleur" exact element={<PageControleur />} />
      <Route path="/commercial" exact element={<PageCommercial />} />
      <Route path="/*" exact element={<Home />} />
    </Routes>
  );
}

export default App;
