import React from 'react';

export default function Footer() {
  return (
    <footer className="mt-12 border-t bg-white">
      <div className="container mx-auto px-4 py-8 text-center text-sm text-gray-500">
        © {new Date().getFullYear()} Lafaaz Fondation. Tous droits réservés.
      </div>
    </footer>
  );
}
