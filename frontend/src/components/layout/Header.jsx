import React, { useEffect, useRef, useState } from 'react';
import { Link, NavLink } from 'react-router-dom';

// Navigation avec sous-menus (dropdowns)
const nav = [
  {
    to: '/fondation', label: 'Fondation',
    children: [
      { to: '/about', label: 'À propos' },
      { to: '/projects', label: 'Nos projets' },
      { to: '/achievements', label: 'Nos réalisations et activités' },
      { to: '/joinus', label: 'Devenir membre' },
    ]
  },
  {
    to: '/programmes', label: 'Programmes',
    children: [
      { to: '/#', label: 'Enfance indigente' },
      { to: '/#', label: 'Assistance aux personnes du troisième âge' },
      { to: '/#', label: 'Coaching de la jeunesse' },
      { to: '/#', label: 'Coaching pour les couples' },
    ]
  },
  { to: '/news', label: 'Actualités' },
  { to: '/joinus', label: 'Devenir membre' },
];

export default function Header() {
  const [scrolled, setScrolled] = useState(false);
  const [openIndex, setOpenIndex] = useState(null);
  const [hovered, setHovered] = useState(false);
  const [donateOpen, setDonateOpen] = useState(false);
  const [donatePlan, setDonatePlan] = useState('once'); // 'once' | 'monthly'
  const [donateAmount, setDonateAmount] = useState(100);
  const headerRef = useRef(null);
  const subRef = useRef(null);

  // Scroll state
  useEffect(() => {
    const onScroll = () => setScrolled(window.scrollY > 16);
    window.addEventListener('scroll', onScroll);
    return () => window.removeEventListener('scroll', onScroll);
  }, []);

  // Sync CSS var for header height (used to position subheader)
  useEffect(() => {
    const setVar = () => {
      const h = headerRef.current?.clientHeight || 112;
      document.documentElement.style.setProperty('--header-h', h + 'px');
    };
    setVar();
    window.addEventListener('resize', setVar);
    return () => window.removeEventListener('resize', setVar);
  }, []);

  // Close on outside click / Esc
  useEffect(() => {
    const onDocClick = (e) => {
      if (!headerRef.current) return;
      const target = e.target;
      if (
        !headerRef.current.contains(target) &&
        !(subRef.current && subRef.current.contains(target))
      ) {
        setOpenIndex(null);
      }
    };
  const onKey = (e) => { if (e.key === 'Escape') { setOpenIndex(null); setDonateOpen(false); } };
    document.addEventListener('click', onDocClick);
    document.addEventListener('keydown', onKey);
    return () => {
      document.removeEventListener('click', onDocClick);
      document.removeEventListener('keydown', onKey);
    };
  }, []);

  const hasSolidBg = scrolled || hovered || openIndex !== null;

  return (
    <>
      <header
        ref={headerRef}
        className={`header-root ${hasSolidBg ? 'header-solid' : 'header-transparent'}`}
        onMouseEnter={() => setHovered(true)}
        onMouseLeave={() => setHovered(false)}
      >
        <div className="container mx-auto px-12 md:px-20 pt-8 md:pt-10 pb-4 md:pb-5 relative flex items-center gap-10 bg-transparent">
          {/* Logo gauche cross-fade stabilisé (dimension fixe, pas de shift) */}
          <Link to="/" className="z-10 flex items-center">
            <div className="relative h-20 w-56 md:h-24 md:w-64">
              {/* Logo blanc (visible au repos - fond transparent) */}
              <img
                src="/assets/img/logo blanc.png"
                alt="Logo LAFAAZ blanc"
                loading="eager"
                className={`absolute inset-0 w-full h-full object-contain object-center transition-opacity duration-500 ease-in-out ${hasSolidBg ? 'opacity-0' : 'opacity-100'}`}
                draggable={false}
              />
              {/* Logo couleur (visible sur fond solide - scroll/hover/menu ouvert) */}
              <img
                src="/assets/img/logo.png"
                alt="Logo LAFAAZ couleur"
                loading="eager"
                className={`absolute inset-0 w-full h-full object-contain object-center transition-opacity duration-500 ease-in-out ${hasSolidBg ? 'opacity-100' : 'opacity-0'}`}
                draggable={false}
              />
            </div>
          </Link>

          {/* Nav centrée (absolute pour rester centrée entre logo et actions) */}
          <nav className="absolute left-1/2 -translate-x-1/2 z-0">
            <ul className="flex items-center gap-5">
              {nav.map((item, idx) => (
                <li key={item.to} className="relative">
                  <NavLink
                    to={item.to}
                    onClick={(e) => {
                      if (item.children) {
                        e.preventDefault();
                        setOpenIndex(openIndex === idx ? null : idx);
                      } else {
                        setOpenIndex(null);
                      }
                    }}
                    className={({ isActive }) =>
                      `nav-link ${hasSolidBg ? 'nav-on-solid' : 'nav-on-transparent'} ${isActive ? 'nav-active' : ''} inline-flex items-center gap-1`
                    }
                  >
                    <span>{item.label}</span>
                    {item.children && (
                      <button
                        type="button"
                        aria-label={`Ouvrir le menu ${item.label}`}
                        className="inline-flex items-center"
                        onClick={(e) => { e.preventDefault(); setOpenIndex(openIndex === idx ? null : idx); }}
                      >
                        <svg
                          className={`nav-caret ${openIndex === idx ? 'caret-open' : ''}`}
                          width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"
                          aria-hidden="true"
                        >
                          <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                      </button>
                    )}
                  </NavLink>
                  {/* Dropdown */}
                  {/* Dropdown retiré du hover: remplacé par subheader */}
                </li>
              ))}
            </ul>
          </nav>

          {/* Actions à droite */}
          <div className="ml-auto z-10 flex items-center gap-3">
            <NavLink to="/login" aria-label="Connexion" className={`btn-icon ${hasSolidBg ? 'btn-icon-solid' : 'btn-icon-transparent'}`}>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                <circle cx="12" cy="7" r="4"/>
              </svg>
            </NavLink>
            <NavLink to="/register" className={`btn-outline ${hasSolidBg ? 'btn-outline-solid' : 'btn-outline-transparent'}`}>S’inscrire</NavLink>
          </div>
        </div>
      </header>

      {/* Sous-header (panneau) */}
      {openIndex !== null && nav[openIndex]?.children && (
        <div ref={subRef} className="subheader-root">
          <div className="container mx-auto px-12 md:px-20 subheader-inner">
            <div className="flex items-start gap-10">
              <div className="min-w-[220px]">
                <div className="text-sm uppercase tracking-wide text-slate-500 mb-2">{nav[openIndex].label}</div>
                <div className="h-px bg-slate-200 mb-3"></div>
              </div>
              <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 w-full">
                {nav[openIndex].children.map((child) => (
                  <NavLink
                    key={child.label}
                    to={child.to}
                    className="subheader-link"
                    onClick={() => setOpenIndex(null)}
                  >
                    {child.label}
                  </NavLink>
                ))}
              </div>
            </div>
          </div>
        </div>
      )}

      {/* Bouton DONATE flottant permanent */}
      <button
        type="button"
        className={`donate-fab ${donateOpen ? 'active' : ''}`}
        aria-expanded={donateOpen}
        aria-controls="donate-drawer"
        onClick={() => setDonateOpen((v) => !v)}
        title="Faire un don"
      >
        DONATE
        <svg className={`donate-caret ${donateOpen ? 'open' : ''}`} width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
          <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
      </button>

      {/* Donate Drawer */}
      {donateOpen && (
        <>
          <div className="donate-overlay" onClick={() => setDonateOpen(false)} />
          <aside id="donate-drawer" className={`donate-drawer ${donateOpen ? 'open' : ''}`} role="dialog" aria-label="Donation">
            <div className="donate-header">
              <h3>Faire un don</h3>
              <button className="donate-close" aria-label="Fermer" onClick={() => setDonateOpen(false)}>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
              </button>
            </div>

            {/* Tabs once/monthly */}
            <div className="donate-tabs">
              <button className={`donate-tab ${donatePlan === 'once' ? 'active' : ''}`} onClick={() => setDonatePlan('once')}>Don unique</button>
              <button className={`donate-tab ${donatePlan === 'monthly' ? 'active' : ''}`} onClick={() => setDonatePlan('monthly')}>Mensuel</button>
            </div>

            {/* Presets */}
            <div className="donate-presets">
              {[50, 100, 250].map(v => (
                <button key={v} className={`donate-chip ${donateAmount === v ? 'active' : ''}`} onClick={() => setDonateAmount(v)}>
                  ${v}
                </button>
              ))}
              <button className={`donate-chip ${!([50,100,250].includes(donateAmount)) ? 'active' : ''}`} onClick={() => setDonateAmount(0)}>
                Autre
              </button>
            </div>

            {/* Other amount */}
            <div className="donate-input">
              <span>$</span>
              <input type="number" min="0" value={donateAmount || ''} onChange={(e) => setDonateAmount(Number(e.target.value))} placeholder="Autre montant" />
            </div>

            <button className="donate-cta" onClick={() => { /* TODO: connecter checkout */ setDonateOpen(false); }}>
              Donner maintenant
            </button>
          </aside>
        </>
      )}
    </>
  );
}
