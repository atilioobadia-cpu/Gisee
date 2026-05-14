// Gisee Infotech — site interactions (navigation, modals, reveal animations).
// Extracted from the legacy index.php inline script during the Laravel migration.

if ('scrollRestoration' in window.history) {
    window.history.scrollRestoration = 'manual';
}

document.body.classList.add('js-animate');

document.addEventListener('DOMContentLoaded', function () {
    const body = document.body;
    const topbar = document.querySelector('.topbar');
    const navPanel = document.querySelector('.nav-panel');
    const toggle = document.querySelector('.mobile-menu-toggle');
    const navLinks = document.querySelectorAll('.nav-links a, .brand, .cta-pill, .inline-link, .header-contact-pill');
    const navActionButtons = document.querySelectorAll('.nav-links button');
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    const dropdownGroups = document.querySelectorAll('.nav-item-has-menu');
    const setNavState = function (isOpen) {
        body.classList.toggle('nav-open', isOpen);

        if (toggle) {
            toggle.setAttribute('aria-expanded', String(isOpen));
            toggle.setAttribute('aria-label', isOpen ? 'Close navigation' : 'Open navigation');
        }
    };
    const updateMobileNavOffset = function () {
        if (!topbar) {
            return;
        }

        const rect = topbar.getBoundingClientRect();
        const nextOffset = Math.max(72, Math.round(rect.bottom + 10));
        document.documentElement.style.setProperty('--mobile-nav-offset', nextOffset + 'px');
    };
    const closeAllDropdowns = function () {
        dropdownGroups.forEach(function (group) {
            const toggleButton = group.querySelector('.dropdown-toggle');
            const panel = group.querySelector('.dropdown-panel');
            group.classList.remove('is-open');
            if (toggleButton) {
                toggleButton.setAttribute('aria-expanded', 'false');
            }
            if (panel) {
                panel.hidden = true;
            }
        });
    };

    dropdownToggles.forEach(function (button) {
        button.addEventListener('click', function (event) {
            event.stopPropagation();
            const group = button.closest('.nav-item-has-menu');
            if (!group) {
                return;
            }

            const isOpen = !group.classList.contains('is-open');
            closeAllDropdowns();
            if (isOpen) {
                const panel = group.querySelector('.dropdown-panel');
                group.classList.add('is-open');
                if (panel) {
                    panel.hidden = false;
                }
                button.setAttribute('aria-expanded', 'true');
            }
        });
    });

    document.addEventListener('click', function (event) {
        if (!event.target.closest('.nav-item-has-menu')) {
            closeAllDropdowns();
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeAllDropdowns();
        }
    });

    const revealItems = document.querySelectorAll('[data-reveal]');
    const typedWord = document.querySelector('.typed-word');
    const countNumbers = document.querySelectorAll('.count-number');
    const serviceTabs = document.querySelectorAll('[data-service-tab]');
    const servicePanels = document.querySelectorAll('[data-service-panel]');
    const serviceMotionCards = document.querySelectorAll('[data-service-motion]');
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const authSection = document.querySelector('.auth-section');
    const authStage = document.querySelector('[data-auth-stage]');
    const authOpeners = document.querySelectorAll('[data-auth-open]');
    const authModeButtons = document.querySelectorAll('[data-auth-mode]');
    const authPanels = document.querySelectorAll('[data-auth-panel]');
    const authForms = document.querySelectorAll('.auth-form-panel');
    const authClosers = document.querySelectorAll('[data-auth-close]');
    const contactSection = document.querySelector('.contact-modal');
    const contactStage = contactSection ? contactSection.querySelector('.contact-modal-stage') : null;
    const contactOpeners = document.querySelectorAll('[data-contact-open]');
    const contactClosers = document.querySelectorAll('[data-contact-close]');
    const contactForms = document.querySelectorAll('.contact-modal-form');
    const toastContainer = document.querySelector('.toast-container');
    const showToast = function (message, type) {
        if (!toastContainer) {
            return;
        }

        const toast = document.createElement('div');
        toast.className = 'toast-message toast-' + (type || 'info');
        toast.textContent = message;
        toastContainer.appendChild(toast);

        window.setTimeout(function () {
            toast.classList.add('toast-visible');
        }, 10);

        window.setTimeout(function () {
            toast.classList.remove('toast-visible');
            window.setTimeout(function () {
                toast.remove();
            }, 260);
        }, 4200);
    };

    const navigationEntry = performance.getEntriesByType('navigation')[0];
    const modalCloseTimers = new WeakMap();
    let closeAuth = function () {};
    let closeContact = function () {};

    const syncModalState = function () {
        const isModalOpen = body.classList.contains('auth-open') || body.classList.contains('contact-open');
        body.classList.toggle('modal-open', isModalOpen);
    };

    const clearModalTimer = function (modal) {
        const timer = modalCloseTimers.get(modal);
        if (timer) {
            window.clearTimeout(timer);
            modalCloseTimers.delete(modal);
        }
    };

    const resetModalMotion = function (stage) {
        if (!stage) {
            return;
        }

        stage.style.setProperty('--modal-tilt-x', '0deg');
        stage.style.setProperty('--modal-tilt-y', '0deg');
    };

    const setModalOrigin = function (stage, opener) {
        if (!stage) {
            return;
        }

        if (!opener || typeof opener.getBoundingClientRect !== 'function') {
            stage.style.removeProperty('--modal-origin-x');
            stage.style.removeProperty('--modal-origin-y');
            return;
        }

        const openerRect = opener.getBoundingClientRect();
        const stageRect = stage.getBoundingClientRect();
        const originX = Math.max(36, Math.min(stageRect.width - 36, openerRect.left + (openerRect.width / 2) - stageRect.left));
        const originY = Math.max(28, Math.min(stageRect.height - 28, openerRect.top + (openerRect.height / 2) - stageRect.top));

        stage.style.setProperty('--modal-origin-x', originX.toFixed(2) + 'px');
        stage.style.setProperty('--modal-origin-y', originY.toFixed(2) + 'px');
    };

    const showModal = function (modal, stage, bodyClass, opener) {
        if (!modal) {
            return;
        }

        clearModalTimer(modal);
        modal.hidden = false;
        modal.setAttribute('aria-hidden', 'false');
        modal.classList.remove('is-closing');
        resetModalMotion(stage);
        setModalOrigin(stage, opener || null);

        if (prefersReducedMotion) {
            modal.classList.add('is-visible');
            body.classList.add(bodyClass);
            syncModalState();
            return;
        }

        window.requestAnimationFrame(function () {
            modal.classList.add('is-visible');
            body.classList.add(bodyClass);
            syncModalState();
        });
    };

    const hideModal = function (modal, stage, bodyClass, options) {
        if (!modal) {
            return;
        }

        const immediate = options && options.immediate;
        clearModalTimer(modal);
        body.classList.remove(bodyClass);
        syncModalState();

        const finishClose = function () {
            modal.hidden = true;
            modal.setAttribute('aria-hidden', 'true');
            modal.classList.remove('is-visible', 'is-closing');

            if (stage) {
                stage.style.removeProperty('--modal-origin-x');
                stage.style.removeProperty('--modal-origin-y');
                resetModalMotion(stage);
            }
        };

        if (immediate || prefersReducedMotion) {
            finishClose();
            return;
        }

        modal.classList.remove('is-visible');
        modal.classList.add('is-closing');
        modalCloseTimers.set(modal, window.setTimeout(finishClose, 420));
    };

    const attachModalTilt = function (stage) {
        if (!stage || prefersReducedMotion) {
            return;
        }

        stage.addEventListener('pointermove', function (event) {
            if (event.pointerType && event.pointerType !== 'mouse') {
                return;
            }

            const rect = stage.getBoundingClientRect();
            const relativeX = (event.clientX - rect.left) / rect.width - 0.5;
            const relativeY = (event.clientY - rect.top) / rect.height - 0.5;
            stage.style.setProperty('--modal-tilt-x', (-relativeY * 2.6).toFixed(2) + 'deg');
            stage.style.setProperty('--modal-tilt-y', (relativeX * 3.2).toFixed(2) + 'deg');
        });

        stage.addEventListener('pointerleave', function () {
            resetModalMotion(stage);
        });
    };

    attachModalTilt(authStage);
    attachModalTilt(contactStage);

    const clearModalHash = function () {
        if ((window.location.hash === '#contact' || window.location.hash === '#auth') && window.history.replaceState) {
            window.history.replaceState(null, '', window.location.pathname + window.location.search);
        }
    };

    clearModalHash();

    if (!window.location.hash || (navigationEntry && navigationEntry.type === 'reload')) {
        window.scrollTo({ top: 0, left: 0, behavior: 'auto' });
    }

    window.addEventListener('pageshow', function () {
        if (!window.location.hash) {
            window.scrollTo({ top: 0, left: 0, behavior: 'auto' });
        }
    });

    updateMobileNavOffset();

    window.addEventListener('resize', function () {
        updateMobileNavOffset();

        if (window.innerWidth > 820 && body.classList.contains('nav-open')) {
            setNavState(false);
        }
    });

    window.addEventListener('scroll', updateMobileNavOffset, {
        passive: true,
    });

    if (toggle) {
        toggle.addEventListener('click', function () {
            updateMobileNavOffset();
            setNavState(!body.classList.contains('nav-open'));
        });
    }

    document.addEventListener('click', function (event) {
        if (!body.classList.contains('nav-open')) {
            return;
        }

        if (event.target.closest('.topbar') || (navPanel && event.target.closest('.nav-panel'))) {
            return;
        }

        setNavState(false);
    });

    const scrollToTarget = function (target) {
        const topbarHeight = topbar ? topbar.getBoundingClientRect().height + 18 : 0;
        const targetTop = window.scrollY + target.getBoundingClientRect().top - topbarHeight;
        window.scrollTo({
            top: Math.max(0, targetTop),
            behavior: 'smooth',
        });
    };

    navLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            const href = link.getAttribute('href');

            if (!href || href.charAt(0) !== '#') {
                return;
            }

            if (link.hasAttribute('data-auth-open')) {
                return;
            }

            const target = document.querySelector(href);
            if (!target) {
                return;
            }

            event.preventDefault();
            scrollToTarget(target);

            if (body.classList.contains('nav-open')) {
                setNavState(false);
            }
        });
    });

    navActionButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            if (body.classList.contains('nav-open')) {
                setNavState(false);
            }
        });
    });

    if (serviceTabs.length && servicePanels.length) {
        const setActiveServiceMode = function (modeId) {
            serviceTabs.forEach(function (button) {
                const isActive = button.dataset.serviceTab === modeId;
                button.classList.toggle('is-active', isActive);
                button.setAttribute('aria-selected', isActive ? 'true' : 'false');
            });

            servicePanels.forEach(function (panel) {
                const isActive = panel.dataset.servicePanel === modeId;
                panel.classList.toggle('is-active', isActive);
                panel.hidden = !isActive;
            });
        };

        serviceTabs.forEach(function (button) {
            button.addEventListener('click', function () {
                setActiveServiceMode(button.dataset.serviceTab || '');
            });
        });
    }

    if (serviceMotionCards.length && !prefersReducedMotion) {
        const resetMotion = function (card) {
            card.style.setProperty('--card-tilt-x', '0deg');
            card.style.setProperty('--card-tilt-y', '0deg');
            card.style.setProperty('--icon-shift-x', '0px');
            card.style.setProperty('--icon-shift-y', '0px');
        };

        serviceMotionCards.forEach(function (card) {
            resetMotion(card);

            card.addEventListener('pointermove', function (event) {
                if (event.pointerType && event.pointerType !== 'mouse') {
                    return;
                }

                const rect = card.getBoundingClientRect();
                const relativeX = (event.clientX - rect.left) / rect.width - 0.5;
                const relativeY = (event.clientY - rect.top) / rect.height - 0.5;

                card.style.setProperty('--card-tilt-x', (-relativeY * 7).toFixed(2) + 'deg');
                card.style.setProperty('--card-tilt-y', (relativeX * 9).toFixed(2) + 'deg');
                card.style.setProperty('--icon-shift-x', (relativeX * 16).toFixed(2) + 'px');
                card.style.setProperty('--icon-shift-y', (relativeY * 12).toFixed(2) + 'px');
            });

            card.addEventListener('pointerleave', function () {
                resetMotion(card);
            });
        });
    }

    if (contactSection) {
        const openContact = function (opener) {
            closeAuth({ immediate: true });
            showModal(contactSection, contactStage, 'contact-open', opener);
        };

        closeContact = function (options) {
            hideModal(contactSection, contactStage, 'contact-open', options || {});
        };

        contactOpeners.forEach(function (button) {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                if (body.classList.contains('nav-open')) {
                    setNavState(false);
                }
                openContact(button);
            });
        });

        contactClosers.forEach(function (button) {
            button.addEventListener('click', function () {
                closeContact();
            });
        });

        contactForms.forEach(function (form) {
            form.addEventListener('submit', function () {
                // Native submit posts to the Laravel ContactController.
                // Surface immediate feedback while the request is in flight.
                showToast('Sending your message…', 'info');
            });
        });
    }

    if (authStage && authModeButtons.length && authPanels.length) {
        const setAuthMode = function (mode) {
            authStage.setAttribute('data-auth-state', mode);

            authModeButtons.forEach(function (button) {
                if (button.classList.contains('auth-form-tab')) {
                    const isActive = button.dataset.authMode === mode;
                    button.classList.toggle('is-active', isActive);
                    button.setAttribute('aria-selected', isActive ? 'true' : 'false');
                }
            });

            authPanels.forEach(function (panel) {
                const isActive = panel.dataset.authPanel === mode;
                panel.classList.toggle('is-active', isActive);
                panel.hidden = !isActive;
            });
        };

        const openAuth = function (mode, opener) {
            if (!authSection) {
                return;
            }

            closeContact({ immediate: true });

            if (mode) {
                setAuthMode(mode);
            }

            showModal(authSection, authStage, 'auth-open', opener);
        };

        closeAuth = function (options) {
            if (!authSection) {
                return;
            }

            hideModal(authSection, authStage, 'auth-open', options || {});
        };

        authOpeners.forEach(function (button) {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                openAuth(button.dataset.authOpen || 'signin', button);
            });
        });

        authModeButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                const mode = button.dataset.authMode;
                if (mode) {
                    setAuthMode(mode);
                }
            });
        });

        authClosers.forEach(function (button) {
            button.addEventListener('click', function () {
                closeAuth();
            });
        });

        authForms.forEach(function (form) {
            form.addEventListener('submit', function () {
                // Native submit posts to the Laravel auth controllers.
                showToast('Please wait…', 'info');
            });
        });

        document.querySelectorAll('[data-password-toggle]').forEach(function (toggleButton) {
            toggleButton.addEventListener('click', function () {
                const wrap = toggleButton.closest('.auth-input-wrap');
                const input = wrap ? wrap.querySelector('input') : null;
                if (!input) {
                    return;
                }

                const showing = input.type === 'text';
                input.type = showing ? 'password' : 'text';
                toggleButton.textContent = showing ? 'Show' : 'Hide';
                toggleButton.setAttribute('aria-label', showing ? 'Show password' : 'Hide password');
            });
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && body.classList.contains('nav-open')) {
                setNavState(false);
            }

            if (event.key === 'Escape' && body.classList.contains('auth-open')) {
                closeAuth();
            }

            if (event.key === 'Escape' && body.classList.contains('contact-open')) {
                closeContact();
            }
        });

        // Re-open the relevant modal when the server redirects back with
        // validation errors or a status flash (set via <body data-open-modal>).
        const requestedModal = body.dataset.openModal;
        if (requestedModal === 'auth') {
            openAuth(body.dataset.authMode || 'signin', null);
        } else if (requestedModal === 'contact') {
            openContact(null);
        }
    }

    if (typedWord) {
        const words = JSON.parse(typedWord.dataset.words || '[]');
        let wordIndex = 0;
        let charIndex = words[0] ? words[0].length : 0;
        let isDeleting = false;

        const typeLoop = function () {
            const currentWord = words[wordIndex] || '';
            typedWord.textContent = currentWord.slice(0, charIndex);

            let delay = isDeleting ? 55 : 110;

            if (!isDeleting && charIndex === currentWord.length) {
                delay = 2200;
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                wordIndex = (wordIndex + 1) % words.length;
                delay = 320;
            } else {
                charIndex += isDeleting ? -1 : 1;
            }

            window.setTimeout(typeLoop, delay);
        };

        window.setTimeout(typeLoop, 2200);
    }

    if (countNumbers.length) {
        const startCount = function (element) {
            const target = Number(element.dataset.target || 0);
            const suffix = element.dataset.suffix || '';
            const duration = 1800;
            const start = performance.now();

            const step = function (now) {
                const progress = Math.min((now - start) / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 3);
                const current = Math.round(target * eased);
                element.textContent = current + suffix;

                if (progress < 1) {
                    window.requestAnimationFrame(step);
                } else {
                    element.textContent = target + suffix;
                }
            };

            window.requestAnimationFrame(step);
        };

        if ('IntersectionObserver' in window) {
            const counterObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        startCount(entry.target);
                        counterObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            countNumbers.forEach(function (item) {
                counterObserver.observe(item);
            });
        } else {
            countNumbers.forEach(startCount);
        }
    }

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2
        });

        revealItems.forEach(function (item) {
            observer.observe(item);
        });
    } else {
        revealItems.forEach(function (item) {
            item.classList.add('is-visible');
        });
    }

    // Auto-dismissing toasts driven by server-side flash messages.
    document.querySelectorAll('[data-flash-toast]').forEach(function (node) {
        showToast(node.dataset.flashToast, node.dataset.flashType || 'info');
        node.remove();
    });
});
