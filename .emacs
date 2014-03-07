
(add-to-list 'load-path "~/.emacs.d/")

;;no startup msg
(setq inhibit-startup-screen t)

;;no scratch msg
(setq initial-scratch-message nil)

;;hide toolbar
(tool-bar-mode -1)

;;hide menubar
(menu-bar-mode -1)

;;linum-mode
(global-linum-mode 1)

;;disabel disk info
(global-auto-revert-mode 1)

;;default tab
(setq-default tab-width 4);

;;color
(add-to-list 'default-frame-alist '(foreground-color . "white"))
(add-to-list 'default-frame-alist '(background-color . "black"))
(add-to-list 'default-frame-alist '(cursor-color . "coral"))

;; sr-speedbar
(require 'sr-speedbar)
 
(setq speedbar-frame-parameters
      '((minibuffer)
	(width . 40)
	(border-width . 0)
	(menu-bar-lines . 0)
	(tool-bar-lines . 0)
	(unsplittable . t)
	(left-fringe . 0)))
(setq speedbar-hide-button-brackets-flag t)
(setq speedbar-show-unknown-files t)
(setq speedbar-smart-directory-expand-flag t)
(setq speedbar-use-images nil)
(setq sr-speedbar-auto-refresh nil)
(setq sr-speedbar-max-width 70)
(setq sr-speedbar-width-console 40)

;;go lang mode
(require 'go-mode-load)

;;go autocomplete
(require 'go-autocomplete)

;;auto-complete
(require 'auto-complete-config)
(add-to-list 'ac-dictionary-directories "~/.emacs.d/ac-dict")
(ac-config-default)

;;key binding
(defun go-compile-debug ()
  "compile roject"
  (interactive)
  (compile-project "go-build"))

;;markdown mode
(autoload 'markdown-mode "markdown-mode.el"
  "Major mode for editing Markdown files" t)
(add-to-list 'auto-mode-alist '("\\.text\\'" . markdown-mode))
(add-to-list 'auto-mode-alist '("\\.markdown\\'" . markdown-mode))
(add-to-list 'auto-mode-alist '("\\.md\\'" . markdown-mode))
