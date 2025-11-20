import React from 'react';

export default function CTASection() {
  return (
    <section className="py-16 bg-gradient-to-r from-primary-600 to-primary-700 text-white">
      <div className="container mx-auto px-4 text-center">
        <h2 className="text-3xl md:text-4xl font-bold mb-4">
          Make a difference
        </h2>
        <p className="text-xl mb-8 max-w-2xl mx-auto text-primary-50">
          Favoriser l'accès aux besoins quotidiens et à l'égalité des chances chez les personnes vulnérables
        </p>
        <div className="flex flex-wrap gap-4 justify-center">
          <a
            href="/donate"
            className="bg-white text-primary-600 hover:bg-gray-100 px-8 py-3 rounded-md font-semibold text-lg transition"
          >
            Faire un don maintenant
          </a>
          <a
            href="/join-us"
            className="border-2 border-white text-white hover:bg-white/10 px-8 py-3 rounded-md font-semibold text-lg transition"
          >
            Nous rejoindre
          </a>
        </div>
      </div>
    </section>
  );
}
