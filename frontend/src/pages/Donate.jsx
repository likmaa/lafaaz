import React from 'react';
import Button from '../components/ui/Button';

export default function Donate() {
  return (
    <div className="max-w-lg">
      <h1 className="text-2xl font-bold mb-4">Faire un don</h1>
      <p className="text-sm text-gray-600 mb-4">Bientôt: formulaire de don connecté à l'API Kkiapay / PayPal.</p>
      <form className="space-y-4" onSubmit={(e)=>e.preventDefault()}>
        <div>
          <label className="block text-sm font-medium mb-1">Montant (FCFA)</label>
          <input type="number" className="w-full border rounded px-3 py-2" placeholder="1000" />
        </div>
        <div>
          <label className="block text-sm font-medium mb-1">Nom</label>
          <input type="text" className="w-full border rounded px-3 py-2" placeholder="Votre nom" />
        </div>
        <Button type="submit">Valider (WIP)</Button>
      </form>
    </div>
  );
}
