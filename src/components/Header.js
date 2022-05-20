import React from 'react'
import Navigation from './Navigation';

const Header = () => {
  return (
    <div className="headergen">
      <img src="../assets/logo/logo_tarif.png" alt="Logo" className="logo" />
      <div className="nav">
        <Navigation />
      </div>
    </div>
  );
}

export default Header