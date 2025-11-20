import React from 'react';
import RoutesIndex from './routes';
import Header from './components/layout/Header.jsx';
import Footer from './components/layout/Footer.jsx';

function App() {
  return (
    <div className="min-h-screen flex flex-col">
      <Header />
      <main className="flex-1 container mx-auto px-4 py-6">
        <RoutesIndex />
      </main>
      <Footer />
    </div>
  );
}

export default App;
