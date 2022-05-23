import React from 'react'
import Footer from '../components/Footer';
import Header from '../components/Header';

const PageCommercial = () => {
  return (
    <main>
      <div className="page">
        {/*composants : logo, navigation*/}
        <div className="headerPage">
          <Header />
        </div>
        {/*fond animé */}
        <div className="bg"></div>
        <div className="bg bg2"></div>
        <div className="bg bg3"></div>

        {/*Contenu de la page */}
        <div className="page-main">
          <div className="main-content"></div>
          <h1>Page commercial</h1>
        </div>
        <div className="footerPage">
          <Footer />
        </div>
      </div>
    </main>
  );
}

export default PageCommercial