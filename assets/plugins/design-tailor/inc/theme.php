<style>
    .tabing .nav-tabs>li.active>a,
    .tabing .nav-tabs>li.active>a:focus,
    .tabing .nav-tabs>li.active>a:hover {
        background: <?= $_POST['primaryColor']; ?>;
        color: <?= $_POST['secondaryColor']; ?>;
    }

    #Products .thumb_listing ul li:hover span,
    ul li.selected span {
        background: <?= $_POST['primaryColor']; ?>;
        color: <?= $_POST['secondaryColor']; ?>;
    }

    .ngsb-wrap .ngsb-scrollbar .ngsb-thumb-pos .ngsb-thumb {
        background: <?= $_POST['primaryColor']; ?>
    }

    .graphic_options ul li.active>div a {
        color: <?= $_POST['secondaryColor']; ?>
    }

    .graphic_options ul li.active>div {
        background: <?= $_POST['primaryColor']; ?>;
    }

    .md-raised.md-cornered.md-button.md-ink-ripple.active {
        background: <?= $_POST['primaryColor']; ?>;
        color: <?= $_POST['secondaryColor']; ?>;
    }

    .m-prod_counter i:hover {
        color: <?= $_POST['primaryColor']; ?>;
    }

    .m-prod_counter span:hover i {
        color: <?= $_POST['primaryColor']; ?>;
    }

    .action_tabs .fileUpload.btn {
        background: <?= $_POST['primaryColor']; ?>;
        color: <?= $_POST['secondaryColor']; ?>;
    }

    .canvas_options li:hover span {
        color: <?= $_POST['primaryColor']; ?>;
        color: <?= $_POST['secondaryColor']; ?>;
    }

    .canvas_options li:hover i {
        color: <?= $_POST['primaryColor']; ?>;
        color: <?= $_POST['secondaryColor']; ?>;
    }

    md-tabs.md-default-theme md-ink-bar,
    md-tabs md-ink-bar {
        background: <?= $_POST['primaryColor']; ?>;
        color: <?= $_POST['secondaryColor']; ?>;
    }

    .icon-vertical ul li a:hover,
    .icon-vertical ul li>span:hover,
    .icon-vertical ul li:hover {
        background: <?= $_POST['primaryColor']; ?>;
        color: <?= $_POST['secondaryColor']; ?>;
    }

    md-tabs.md-default-theme.md-accent>md-tabs-wrapper>md-tabs-canvas>md-pagination-wrapper>md-tab-item.md-active:not([disabled]),
    md-tabs.md-accent>md-tabs-wrapper>md-tabs-canvas>md-pagination-wrapper>md-tab-item.md-active:not([disabled]),
    md-tabs.md-default-theme.md-accent>md-tabs-wrapper>md-tabs-canvas>md-pagination-wrapper>md-tab-item.md-active:not([disabled]) md-icon,
    md-tabs.md-accent>md-tabs-wrapper>md-tabs-canvas>md-pagination-wrapper>md-tab-item.md-active:not([disabled]) md-icon,
    md-tabs.md-default-theme.md-accent>md-tabs-wrapper>md-tabs-canvas>md-pagination-wrapper>md-tab-item.md-focused:not([disabled]),
    md-tabs.md-accent>md-tabs-wrapper>md-tabs-canvas>md-pagination-wrapper>md-tab-item.md-focused:not([disabled]),
    md-tabs.md-default-theme.md-accent>md-tabs-wrapper>md-tabs-canvas>md-pagination-wrapper>md-tab-item.md-focused:not([disabled]) md-icon,
    md-tabs.md-accent>md-tabs-wrapper>md-tabs-canvas>md-pagination-wrapper>md-tab-item.md-focused:not([disabled]) md-icon {
        color: <?= $_POST['primaryColor']; ?>;
        color: <?= $_POST['secondaryColor']; ?>;
    }

    #Products .thumb_listing ul li:hover span,
    #Products .thumb_listing ul li.selected span {
        background: <?= $_POST['primaryColor']; ?>;
        color: <?= $_POST['secondaryColor']; ?>;
    }

    .cart_icon {
        background: <?= $_POST['primaryColor']; ?>;
        color: <?= $_POST['secondaryColor']; ?>;
    }

    .loadMore {
        background: <?= $_POST['primaryColor']; ?>;
        color: <?= $_POST['secondaryColor']; ?>;
    }

    .canvas_options li:hover span {
        color: <?= $_POST['secondaryColor']; ?>;
    }

    .canvas_options li:hover i {
        color: <?= $_POST['secondaryColor']; ?>;
    }

    .canvas_options li:hover {
        background: <?= $_POST['primaryColor']; ?>;
    }

    .ulInner .liActions a:hover {
        background: <?= $_POST['primaryColor']; ?>;
        color: <?= $_POST['secondaryColor']; ?>;
    }

    .social-share a:hover {
        background: <?= $_POST['primaryColor']; ?>;
        color: <?= $_POST['secondaryColor']; ?>;
    }

    .social-share a.fa.fa-facebook:hover {
        background: <?= $_POST['primaryColor']; ?>;
        color: <?= $_POST['secondaryColor']; ?>;
    }

    .social-share a.fa.fa-twitter:hover {
        background: <?= $_POST['primaryColor']; ?>;
        color: <?= $_POST['secondaryColor']; ?>;
    }

    .md-tab.ng-scope.ng-isolate-scope.md-ink-ripple.md-active {
        color: <?= $_POST['primaryColor']; ?>;
    }

    .thumb_listing a.loadMore:hover {
        background: <?= $_POST['secondaryColor']; ?>;
        color: <?= $_POST['primaryColor']; ?> !important;
    }

    .canvas_details a.cart_icon:hover {
        background: <?= $_POST['secondaryColor']; ?>;
        color: <?= $_POST['primaryColor']; ?> !important;
    }

    .action_tabs .md-button.active,
    .action_tabs .md-button:active {
        background: <?= $_POST['primaryColor']; ?>;
        color: <?= $_POST['secondaryColor']; ?> !important;
    }

    md-switch.md-default-theme.md-checked .md-ink-ripple,
    md-switch.md-checked .md-ink-ripple {
        color: <?= $_POST['primaryColor']; ?> !important;
    }

    md-input-container.md-default-theme.md-input-focused:not(.md-input-invalid) .md-input,
    md-input-container.md-input-focused:not(.md-input-invalid) .md-input {
        border-color: <?= $_POST['primaryColor']; ?> !important;
    }

    md-checkbox.md-default-theme.md-checked .md-icon,
    md-checkbox.md-checked .md-icon {
        background-color: <?= $_POST['primaryColor']; ?> !important;
    }

    md-radio-group.md-default-theme:not([disabled]) .md-primary .md-checked .md-off,
    md-radio-group:not([disabled]) .md-primary .md-checked .md-off,
    md-radio-group.md-default-theme:not([disabled]) .md-primary.md-checked .md-off,
    md-radio-group:not([disabled]) .md-primary.md-checked .md-off,
    md-radio-group.md-default-theme.md-primary:not([disabled]) .md-checked .md-off,
    md-radio-group.md-primary:not([disabled]) .md-checked .md-off,
    md-radio-group.md-default-theme.md-primary.md-checked:not([disabled]) .md-off,
    md-radio-group.md-primary.md-checked:not([disabled]) .md-off,
    md-radio-button.md-default-theme:not([disabled]) .md-primary .md-checked .md-off,
    md-radio-button:not([disabled]) .md-primary .md-checked .md-off,
    md-radio-button.md-default-theme:not([disabled]) .md-primary.md-checked .md-off,
    md-radio-button:not([disabled]) .md-primary.md-checked .md-off,
    md-radio-button.md-default-theme.md-primary:not([disabled]) .md-checked .md-off,
    md-radio-button.md-primary:not([disabled]) .md-checked .md-off,
    md-radio-button.md-default-theme.md-primary.md-checked:not([disabled]) .md-off,
    md-radio-button.md-primary.md-checked:not([disabled]) .md-off {
        border-color: <?= $_POST['primaryColor']; ?> !important;
    }

    md-radio-group.md-default-theme:not([disabled]) .md-primary .md-on,
    md-radio-group:not([disabled]) .md-primary .md-on,
    md-radio-group.md-default-theme.md-primary:not([disabled]) .md-on,
    md-radio-group.md-primary:not([disabled]) .md-on,
    md-radio-button.md-default-theme:not([disabled]) .md-primary .md-on,
    md-radio-button:not([disabled]) .md-primary .md-on,
    md-radio-button.md-default-theme.md-primary:not([disabled]) .md-on,
    md-radio-button.md-primary:not([disabled]) .md-on {
        background-color: <?= $_POST['primaryColor']; ?> !important;
    }

    md-input-container.md-default-theme.md-input-focused:not(.md-input-invalid) label,
    md-input-container.md-input-focused:not(.md-input-invalid) label {
        color: <?= $_POST['primaryColor']; ?> !important;
    }

    md-switch.md-default-theme.md-checked .md-thumb,
    md-switch.md-checked .md-thumb {
        background-color: <?= $_POST['primaryColor']; ?> !important;
    }

    md-switch.md-default-theme.md-checked .md-bar,
    md-switch.md-checked .md-bar {
        background-color: <?= $_POST['primaryColor']; ?> !important;
    }

    a.md-button.md-default-theme.md-primary,
    a.md-button.md-primary,
    .md-button.md-default-theme.md-primary,
    .md-button.md-primary {
        color: <?= $_POST['primaryColor']; ?> !important;
    }

    a.md-button.md-default-theme:hover:not([disabled]),
    a.md-button:hover:not([disabled]),
    .md-button.md-default-theme:hover:not([disabled]),
    .md-button:hover:not([disabled]) {
        background-color: <?= $_POST['primaryColor']; ?> !important;
        color: <?= $_POST['secondaryColor']; ?> !important;
    }

    .md-primary .md-button .md-default-theme .md-ink-ripple {
        background-color: <?= $_POST['secondaryColor']; ?> !important;
        color: <?= $_POST['primaryColor']; ?> !important;
    }

    .close-circle i {
        color: <?= $_POST['primaryColor']; ?> !important;
    }

    md-select.md-default-theme .md-select-value,
    md-select .md-select-value {
        border-bottom-color: <?= $_POST['primaryColor']; ?> !important;
    }

    input[type=range]::-webkit-slider-thumb {
        background: <?= $_POST['primaryColor']; ?>
    }

    input[type=range]::-moz-range-thumb {
        background: <?= $_POST['primaryColor']; ?>;
        border-color: <?= $_POST['primaryColor']; ?>;
    }

    input[type=range]::-ms-thumb {
        background: <?= $_POST['primaryColor']; ?>;
        border-color: <?= $_POST['primaryColor']; ?>;
    }
</style>