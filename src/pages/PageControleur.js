import React from 'react'
import Footer from '../components/Footer';
import Header from '../components/Header';

const PageControleur = () => {
  return (
    <main>
      {/*page principale */}
      <div className="page">
        {/*composants : logo, navigation*/}
        <div className="headerPage">
          <Header />
        </div>
        {/*Image de fond */}

        {/*Contenu de la page */}
        <div className="page-main">
          <div className="main-content">
            <h1>Page Controleur</h1>
          </div>
        </div>
        <div className="footerPage">
          <Footer />
        </div>
      </div>
    </main>
  );
};
export default PageControleur