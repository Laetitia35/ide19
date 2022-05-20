import React from "react";
import { NavLink } from "react-router-dom";

const Navigation = () => {
  return (
    <div className="navigation">
      <NavLink
        end
        to="/"
        className={(navdata) => (navdata.isActive ? "navactive" : "")}
      >
        <button type="button" className="btn">
          Acceuil
        </button>
      </NavLink>
      <NavLink
        end
        to="/controleur"
        className={(navdata) => (navdata.isActive ? "navactive" : "")}
      >
        <button type="button" className="btn">
          Controleur
        </button>
      </NavLink>
      <NavLink
        end
        to="/commercial"
        className={(navdata) => (navdata.isActive ? "navactive" : "")}
      >
        <button type="button" className="btn">
          Commercial
        </button>
      </NavLink>
    </div>
  );
};

export default Navigation;
