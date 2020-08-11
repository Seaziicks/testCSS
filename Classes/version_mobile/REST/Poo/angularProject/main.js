(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["main"],{

/***/ "./$$_lazy_route_resource lazy recursive":
/*!******************************************************!*\
  !*** ./$$_lazy_route_resource lazy namespace object ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function webpackEmptyAsyncContext(req) {
	// Here Promise.resolve().then() is used instead of new Promise() to prevent
	// uncaught exception popping up in devtools
	return Promise.resolve().then(function() {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	});
}
webpackEmptyAsyncContext.keys = function() { return []; };
webpackEmptyAsyncContext.resolve = webpackEmptyAsyncContext;
module.exports = webpackEmptyAsyncContext;
webpackEmptyAsyncContext.id = "./$$_lazy_route_resource lazy recursive";

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/_modal/modal.component.html":
/*!***********************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/_modal/modal.component.html ***!
  \***********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<div class=\"jw-modal\">\r\n    <div class=\"jw-modal-body\">\r\n        <ng-content></ng-content>\r\n    </div>\r\n</div>\r\n<div class=\"jw-modal-background\"></div>\r\n");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/addCompetenceEffect/add-competence-effect/add-competence-effect.component.html":
/*!**************************************************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/addCompetenceEffect/add-competence-effect/add-competence-effect.component.html ***!
  \**************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<div id=\"fakebody\" (click)=\"disableContextMenu()\">\r\n  <div class=\"principal\">\r\n    <div id=\"caracterSelection\" class=\"caracterSelection\">\r\n      <h3 *ngIf=\"idPersonnage == -1\">Selectionnez un personnage</h3>\r\n      <div id=\"divPersonnage\">\r\n        <div id=\"divImageSelectedPersonnage\">\r\n          <img src=\"\" alt=\"\" id=\"imageSelectedPersonnage\"/>\r\n          <ul id=\"hiddenPersonnageSelection\">\r\n            <li *ngFor=\"let personnage of personnagesList\" (click)=\"notifyPersonnageSelection(personnage.idPersonnage)\"\r\n                [routerLink]=\"[ { outlets: { personnageAddCompetenceEffect: [ personnage.idPersonnage ] } }]\">\r\n              <span><img [src]=\"personnage.icon\" alt=\"\"></span>\r\n              <span>{{personnage.libelle}}</span>\r\n            </li>\r\n          </ul>\r\n        </div>\r\n        <router-outlet name=\"personnageAddCompetenceEffect\"></router-outlet>\r\n      </div>\r\n\r\n    </div>\r\n\r\n    <div id=\"competenceSelection\">\r\n      <h6 *ngIf=\"idCompetence === -1 && idPersonnage != -1\">Selectionnez une compétence</h6>\r\n      <button class=\"btn btn-outline-warning buttonSelectCompetence\" *ngIf=\"idPersonnage !== -1\"\r\n              (click)=\"addCompetenceToList()\">Ajouter une competence\r\n      </button>\r\n      <div>\r\n        <ul id=\"competenceList\" class=\"competenceList\">\r\n          <li *ngFor=\"let competence of this.getCompetenceList()\"\r\n              (click)=\"notifyCompetenceSelection(competence.idCompetence)\"\r\n              [routerLink]=\"[ { outlets: { competenceAddCompetenceEffect: [ competence.idCompetence ] } }]\"\r\n              (contextmenu)=\"onrightClick($event, competence.idCompetence, competence.libelle)\">\r\n            <span>\r\n              <img class=\"imgCompetence\" [src]=\"competence.getImage()\"\r\n                   alt=\"\">\r\n            </span>\r\n            <span>{{competence.libelle}}</span>\r\n          </li>\r\n        </ul>\r\n      </div>\r\n    </div>\r\n\r\n    <div id=\"effectSelection\">\r\n      <div>\r\n        <router-outlet name=\"competenceAddCompetenceEffect\"></router-outlet>\r\n      </div>\r\n    </div>\r\n  </div>\r\n</div>\r\n\r\n<div *ngIf=\"contextmenu==true\">\r\n  <app-context-menu-competence [x]=\"contextmenuX\" [y]=\"contextmenuY\" [idCompetence]=\"righClickCompetence\"\r\n                               [competenceName]=\"rightClickedCompetenceName\" [idPersonnage]=\"idPersonnage\"></app-context-menu-competence>\r\n</div>\r\n\r\n\r\n");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/addCompetenceEffect/competence-add-competence-effect/competence-add-competence-effect.component.html":
/*!************************************************************************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/addCompetenceEffect/competence-add-competence-effect/competence-add-competence-effect.component.html ***!
  \************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<ul id=\"effectList\" class=\"effectList\">\r\n  <li *ngFor=\"let effect of this.effectList\">\r\n    <div (click)=\"notifyEffectSelection(effect.idCompetenceEffect)\"\r\n         [routerLink]=\"[ { outlets: { effectAddCompetenceEffect: [ effect.idCompetenceEffect ] } }]\">\r\n      <span>{{effect.getEffectDescription()}}</span>\r\n    </div>\r\n  <span ngbAutofocus (click)=\"open('focusFirst', effect.idCompetenceEffect)\">\r\n      <fa-icon [icon]=\"faMinusCircle\"></fa-icon>\r\n    </span>\r\n  </li>\r\n</ul>\r\n<div>\r\n  <router-outlet name=\"effectAddCompetenceEffect\"></router-outlet>\r\n</div>\r\n\r\n<button *ngIf=\"+this.idEffect !== -1\" class=\"btn btn-outline-warning\" (click)=\"notifyEffectSelection(-1)\"\r\n        [routerLink]=\"[ { outlets: { effectAddCompetenceEffect: [ -1 ] } }]\" type=\"button\">Ajouter un effet</button>\r\n");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/addCompetenceEffect/context-menu-competence/context-menu-competence.component.html":
/*!******************************************************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/addCompetenceEffect/context-menu-competence/context-menu-competence.component.html ***!
  \******************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<div class=\"contextmenu\" [ngStyle]=\"{'left.px': x, 'top.px': y}\" (click)=\"skillDeletionPopover('focusFirst')\">\n  Supprimer la compétence\n</div>\n");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/addCompetenceEffect/effect-add-competence-effect/effect-add-competence-effect.component.html":
/*!****************************************************************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/addCompetenceEffect/effect-add-competence-effect/effect-add-competence-effect.component.html ***!
  \****************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<ng-template #actionTypePopoverBody>\r\n  <div [innerHtml]=\"this.getActionTypePopoverBody() | safe: 'html'\"></div>\r\n</ng-template>\r\n<ng-template #actionTypePopoverTitle>\r\n  <div style=\"color: black\" [innerHtml]=\"this.getActionTypePopoverTitle() | safe: 'html'\"></div>\r\n</ng-template>\r\n<ng-template #effectTypePopoverBody>\r\n  <div [innerHtml]=\"this.getEffectTypePopoverBody() | safe: 'html'\"></div>\r\n</ng-template>\r\n<ng-template #effectTypePopoverTitle>\r\n  <div style=\"color: black\" [innerHtml]=\"this.getEffectTypePopoverTitle() | safe: 'html'\"></div>\r\n</ng-template>\r\n<ng-template #applicationTypePopoverBody>\r\n  <div [innerHtml]=\"this.getApplicationTypePopoverBody() | safe: 'html'\"></div>\r\n</ng-template>\r\n<ng-template #applicationTypePopoverTitle>\r\n  <div style=\"color: black\" [innerHtml]=\"this.getApplicationTypePopoverTitle() | safe: 'html'\"></div>\r\n</ng-template>\r\n\r\n\r\n<ng-template #niveauRequisToolTip>\r\n  <div [innerHtml]=\"this.getNiveauRequisToolTip() | safe: 'html'\"></div>\r\n</ng-template>\r\n<ng-template #typeCalculToolTip>\r\n  <div [innerHtml]=\"this.getTypeCalculToolTip() | safe: 'html'\"></div>\r\n</ng-template>\r\n<ng-template #amplitudeToolTip>\r\n  <div [innerHtml]=\"this.getAmplitudeToolTip() | safe: 'html'\"></div>\r\n</ng-template>\r\n<ng-template #nombreAmplitudeToolTip>\r\n  <div [innerHtml]=\"this.getNombreAmplitudeToolTip() | safe: 'html'\"></div>\r\n</ng-template>\r\n<ng-template #pourcentageToolTip>\r\n  <div [innerHtml]=\"this.getPourcentageToolTip() | safe: 'html'\"></div>\r\n</ng-template>\r\n\r\n<ng-template #statistiqueToolTip>\r\n  <div [innerHtml]=\"this.getStatistiqueToolTip() | safe: 'html'\"></div>\r\n</ng-template>\r\n\r\n\r\n<form class=\"needs-validation\" id=\"competenceEffectForm\" onsubmit=\"return addValidationListener(this)\" novalidate>\r\n  <div class=\"form-row\">\r\n    <div class=\"col-md-2 mb-3\">\r\n      <label for=\"validationEffectOrder\">EffectOrder\r\n      </label>\r\n      <input min=\"1\" max=\"37\" type=\"number\" class=\"form-control\" id=\"validationEffectOrder\" name=\"validationEffectOrder\"\r\n             placeholder=\"EffectOrder\" [(ngModel)]=\"this.effectOrder\" required>\r\n    </div>\r\n\r\n    <div class=\"col-md-2 mb-3\">\r\n      <label for=\"validationActionType\">ActionType\r\n        <fa-icon [icon]=\"faQuestionCircle\" [ngbPopover]=\"actionTypePopoverBody\" [popoverTitle]=\"actionTypePopoverTitle\"\r\n                 popoverClass=\"increase-popover-width\" [autoClose]=\"false\" placement=\"right\" ></fa-icon>\r\n      </label>\r\n      <input min=\"1\" max=\"37\" type=\"number\" class=\"form-control\" id=\"validationActionType\" name=\"validationActionType\"\r\n             placeholder=\"ActionType\" [(ngModel)]=\"this.actionType\" required>\r\n    </div>\r\n\r\n    <div class=\"col-md-2 mb-3\" *ngIf=\"actionType > 6\">\r\n      <label for=\"validationEffectType\">EffectType\r\n        <fa-icon [icon]=\"faQuestionCircle\" [ngbPopover]=\"effectTypePopoverBody\" [popoverTitle]=\"effectTypePopoverTitle\"\r\n                 popoverClass=\"increase-popover-width\" [autoClose]=\"false\" placement=\"right\"></fa-icon>\r\n      </label>\r\n      <input min=\"1\" max=\"38\" type=\"number\" class=\"form-control\" id=\"validationEffectType\" name=\"validationEffectType\"\r\n             placeholder=\"EffectType\" [(ngModel)]=\"this.effectType\" required>\r\n    </div>\r\n\r\n    <div class=\"col-md-2 mb-3\">\r\n      <label for=\"validationApplicationType\">ApplicationType\r\n        <fa-icon [icon]=\"faQuestionCircle\" [ngbPopover]=\"applicationTypePopoverBody\" [popoverTitle]=\"applicationTypePopoverTitle\"\r\n                 popoverClass=\"increase-popover-width\" [autoClose]=\"false\" placement=\"right\" ></fa-icon>\r\n      </label>\r\n      <input min=\"1\" max=\"22\" type=\"number\" class=\"form-control\" id=\"validationApplicationType\" name=\"validationApplicationType\"\r\n             placeholder=\"ApplicationType\" [(ngModel)]=\"this.applicationType\" required>\r\n    </div>\r\n\r\n    <div class=\"col-md-2 mb-3\">\r\n      <label for=\"validationNiveauRequis\">NiveauRequis\r\n        <fa-icon [icon]=\"faQuestionCircle\" [ngbTooltip]=\"niveauRequisToolTip\"\r\n                 placement=\"right\" triggers=\"mouseenter:mouseleave\"></fa-icon>\r\n      </label>\r\n      <input min=\"1\" max=\"9\" type=\"number\" class=\"form-control\" id=\"validationNiveauRequis\" name=\"validationNiveauRequis\"\r\n             placeholder=\"Niveau Requis\" [(ngModel)]=\"this.niveauRequis\" required>\r\n    </div>\r\n  </div>\r\n\r\n  <div class=\"form-row\">\r\n    <div class=\"col-md-4 mb-3\">\r\n      <label for=\"validationDescriptionBefore\">DescriptionBefore</label>\r\n      <textarea class=\"form-control\" id=\"validationDescriptionBefore\" placeholder=\"Description qui sera placée avant le résultat du calcul de l'effet\" name=\"descriptionBefore\" [(ngModel)]=\"this.descriptionBefore\" required></textarea>\r\n    </div>\r\n\r\n    <div class=\"col-md-4 mb-3\">\r\n      <label for=\"validationDescriptionAfter\">DescriptionAfter</label>\r\n      <textarea class=\"form-control\" id=\"validationDescriptionAfter\" placeholder=\"Description qui sera placée après le résultat du calcul de l'effet\" name=\"descriptionAfter\" [(ngModel)]=\"this.descriptionAfter\" required></textarea>\r\n    </div>\r\n  </div>\r\n\r\n  <div class=\"form-row\">\r\n    <div class=\"col-md-2 mb-3\">\r\n      <label for=\"validationTypeCalcul\">TypeCalcul\r\n        <fa-icon [icon]=\"faQuestionCircle\" [ngbTooltip]=\"typeCalculToolTip\"\r\n                 placement=\"right\" triggers=\"mouseenter:mouseleave\"></fa-icon>\r\n      </label>\r\n      <input type=\"number\" class=\"form-control\" id=\"validationTypeCalcul\" name=\"validationTypeCalcul\"\r\n             placeholder=\"TypeCalcul\" [(ngModel)]=\"this.typeCalcul\" max=\"2\" min=\"1\" required>\r\n    </div>\r\n    <div class=\"col-md-2 mb-3\">\r\n      <label for=\"validationCalcul1A\">Calcul1A</label>\r\n      <input type=\"number\" class=\"form-control\" id=\"validationCalcul1A\" name=\"validationCalcul1A\"\r\n             placeholder=\"Calcul1A\" [(ngModel)]=\"this.calcul1A\" required>\r\n    </div>\r\n\r\n    <div class=\"col-md-2 mb-3\">\r\n      <label for=\"validationCalcul1B\">Calcul1B</label>\r\n      <input type=\"number\" class=\"form-control\" id=\"validationCalcul1B\" name=\"validationCalcul1B\"\r\n             placeholder=\"Calcul1B\" [(ngModel)]=\"this.calcul1B\" [min]=\"0\" [step]=\"0.00001\" required>\r\n    </div>\r\n\r\n    <div class=\"col-md-2 mb-3\">\r\n      <label for=\"validationStatistique1\">Statistique1\r\n        <fa-icon [icon]=\"faQuestionCircle\" [ngbTooltip]=\"statistiqueToolTip\"\r\n                 placement=\"right\" triggers=\"mouseenter:mouseleave\"></fa-icon>\r\n      </label>\r\n      <select id=\"validationStatistique1\" name=\"validationStatistique1\" class=\"form-control\" required>\r\n        <option [selected]=\"this.noStatistique1Selected()\" disabled>Choose...</option>\r\n        <option value=\"force\" [selected]=\"this.whatStatistique1Selected('force')\">force</option>\r\n        <option value=\"agilite\" [selected]=\"this.whatStatistique1Selected('agilite')\">agilite</option>\r\n        <option value=\"intelligence\" [selected]=\"this.whatStatistique1Selected('intelligence')\">intelligence</option>\r\n        <option value=\"vitalite\" [selected]=\"this.whatStatistique1Selected('vitalite')\">vitalite</option>\r\n        <option value=\"ressource\" [selected]=\"this.whatStatistique1Selected('ressource')\">ressource</option>\r\n        <option value=\"niveau\" [selected]=\"this.whatStatistique1Selected('niveau')\">niveau</option>\r\n      </select>\r\n    </div>\r\n  </div>\r\n  <div class=\"form-row\" *ngIf=\"typeCalcul === 2\">\r\n    <div class=\"col-md-2 mb-3\">\r\n      <label for=\"validationCalcul2A\">Calcul2A</label>\r\n      <input type=\"number\" class=\"form-control\" id=\"validationCalcul2A\" name=\"validationCalcul2A\"\r\n             placeholder=\"Calcul1A\" [(ngModel)]=\"this.calcul2A\" required>\r\n    </div>\r\n\r\n    <div class=\"col-md-2 mb-3\">\r\n      <label for=\"validationCalcul2B\">Calcul2B</label>\r\n      <input type=\"number\" class=\"form-control\" id=\"validationCalcul2B\" name=\"validationCalcul2B\"\r\n             placeholder=\"Calcul1B\" [(ngModel)]=\"this.calcul2B\" required>\r\n    </div>\r\n\r\n    <div class=\"col-md-2 mb-3\">\r\n      <label for=\"validationStatistique2\">Statistique2\r\n        <fa-icon [icon]=\"faQuestionCircle\" [ngbTooltip]=\"statistiqueToolTip\"\r\n                 placement=\"right\" triggers=\"mouseenter:mouseleave\"></fa-icon>\r\n      </label>\r\n        <select id=\"validationStatistique2\" name=\"validationStatistique2\" class=\"form-control\" required>\r\n          <option [selected]=\"this.noStatistique2Selected()\" disabled>Choose...</option>\r\n          <option value=\"force\" [selected]=\"this.whatStatistique2Selected('force')\">force</option>\r\n          <option value=\"agilite\" [selected]=\"this.whatStatistique2Selected('agilite')\">agilite</option>\r\n          <option value=\"intelligence\" [selected]=\"this.whatStatistique2Selected('intelligence')\">intelligence</option>\r\n          <option value=\"vitalite\" [selected]=\"this.whatStatistique2Selected('vitalite')\">vitalite</option>\r\n          <option value=\"ressource\" [selected]=\"this.whatStatistique2Selected('ressource')\">ressource</option>\r\n          <option value=\"niveau\" [selected]=\"this.whatStatistique2Selected('niveau')\">niveau</option>\r\n        </select>\r\n    </div>\r\n  </div>\r\n\r\n  <div class=\"form-row\">\r\n    <div class=\"col-md-2 mb-3\">\r\n      <label for=\"validationAmplitude\">Amplitude\r\n        <fa-icon [icon]=\"faQuestionCircle\" [ngbTooltip]=\"amplitudeToolTip\"\r\n                 placement=\"right\" triggers=\"mouseenter:mouseleave\"></fa-icon>\r\n      </label>\r\n      <input min=\"1\" max=\"20\" type=\"number\" class=\"form-control\" id=\"validationAmplitude\" name=\"validationAmplitude\"\r\n             placeholder=\"Amplitude\" [(ngModel)]=\"this.amplitude\">\r\n    </div>\r\n\r\n    <div class=\"col-md-2 mb-3\">\r\n      <label for=\"validationNombreAmplitude\">NombreAmplitude\r\n        <fa-icon [icon]=\"faQuestionCircle\" [ngbTooltip]=\"nombreAmplitudeToolTip\"\r\n                 placement=\"right\" triggers=\"mouseenter:mouseleave\"></fa-icon>\r\n      </label>\r\n      <input min=\"0\" type=\"number\" class=\"form-control\" id=\"validationNombreAmplitude\" name=\"validationNombreAmplitude\"\r\n             placeholder=\"NombreAmplitude\" [(ngModel)]=\"this.nombreAmplitude\">\r\n    </div>\r\n  </div>\r\n\r\n  <div class=\"form-row\">\r\n    <div class=\"col-md-2 mb-3\">\r\n      <label for=\"validationAccumulationType\">AccumulationType\r\n      </label>\r\n      <input min=\"0\" type=\"number\" class=\"form-control\" id=\"validationAccumulationType\" name=\"validationAccumulationType\"\r\n             placeholder=\"AccumulationType\" [(ngModel)]=\"this.accumulationType\" required>\r\n    </div>\r\n\r\n    <div class=\"col-md-2 mb-3\">\r\n      <label for=\"validationNumberOfAccumulation\">NumberOfAccumulation\r\n      </label>\r\n      <input type=\"number\" class=\"form-control\" id=\"validationNumberOfAccumulation\" name=\"validationNumberOfAccumulation\"\r\n             placeholder=\"NumberOfAccumulation\" [(ngModel)]=\"this.numberOfAccumulation\" required>\r\n    </div>\r\n\r\n    <div class=\"form-check\" style=\"display: flex; align-items: center;\">\r\n      <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"validationSuccessiveAccumulation\" name=\"validationSuccessiveAccumulation\"\r\n             [checked]=\"this.successiveAccumulation\">\r\n      <label class=\"form-check-label\" for=\"validationSuccessiveAccumulation\">SuccessiveAccumulation\r\n      </label>\r\n    </div>\r\n\r\n  </div>\r\n\r\n    <div class=\"form-row\">\r\n    <div class=\"col-md-2 mb-1\" *ngIf=\"this.actionType > 6\">\r\n      <label for=\"validationNumberOfUse\">NumberOfUse\r\n      </label>\r\n      <input type=\"number\" class=\"form-control\" id=\"validationNumberOfUse\" name=\"validationNumberOfUse\"\r\n             placeholder=\"NumberOfUse\" [(ngModel)]=\"this.numberOfUse\">\r\n    </div>\r\n\r\n    <div class=\"col-md-2 mb-3\" *ngIf=\"this.actionType > 6\">\r\n      <label for=\"validationNumberOfTurn\">NumberOfTurn\r\n      </label>\r\n      <input type=\"number\" class=\"form-control\" id=\"validationNumberOfTurn\" name=\"validationNumberOfTurn\"\r\n             placeholder=\"NumberOfTurn\" [(ngModel)]=\"this.numberOfTurn\">\r\n    </div>\r\n\r\n    <div class=\"col-md-2 mb-3\" *ngIf=\"this.actionType > 6\">\r\n      <label for=\"validationNumberOfFight\">NumberOfFight\r\n      </label>\r\n      <input type=\"number\" class=\"form-control\" id=\"validationNumberOfFight\" name=\"validationNumberOfFight\"\r\n             placeholder=\"NumberOfFight\" [(ngModel)]=\"this.numberOfFight\">\r\n    </div>\r\n  </div>\r\n\r\n  <div class=\"form-group\">\r\n    <div class=\"form-check\">\r\n      <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"validationPoucentage\" name=\"validationPoucentage\"\r\n             [checked]=\"this.pourcentage\">\r\n      <label class=\"form-check-label\" for=\"validationPoucentage\">Pourcentage\r\n        <fa-icon [icon]=\"faQuestionCircle\" [ngbTooltip]=\"pourcentageToolTip\"\r\n                 placement=\"right\" triggers=\"mouseenter:mouseleave\"></fa-icon>\r\n      </label>\r\n    </div>\r\n\r\n    <div class=\"form-check\">\r\n      <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"validationLinkedEffect\" name=\"validationLinkedEffect\"\r\n             [checked]=\"this.linkedEffect\">\r\n      <label class=\"form-check-label\" for=\"validationLinkedEffect\">LinkedEffect\r\n      </label>\r\n    </div>\r\n  </div>\r\n\r\n  <button class=\"btn btn-danger pull-right\" type=\"submit\" id=\"submissionEffectButton\" style=\"transition: 0.5s\"\r\n          (click)=\"this.effectAddCompetenceEffectService.updateOrCreateCompetenceEffect();\">\r\n    {{this.validationText}}\r\n  </button>\r\n</form>\r\n\r\n\r\n<script>\r\n    function addValidationListener(form) {\r\n        form.addEventListener('submit', function(event) {\r\n            event.preventDefault();\r\n            event.stopPropagation();\r\n            if (form.checkValidity() === false) {\r\n                event.preventDefault();\r\n                event.stopPropagation();\r\n            }\r\n            event.preventDefault();\r\n            event.stopPropagation();\r\n            form.classList.add('was-validated');\r\n        }, false);\r\n    }\r\n</script>\r\n");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/addCompetenceEffect/personnage-add-competence-effect/personnage-add-competence-effect.component.html":
/*!************************************************************************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/addCompetenceEffect/personnage-add-competence-effect/personnage-add-competence-effect.component.html ***!
  \************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<span class=\"personnageCaracteristiques\">\n  <span>\n    <span>{{libelle}}</span>\n    <span>Niveau : {{niveau}}</span><span> Points de vie : {{pdvActuel}}/{{(+vitalite + +bonusVitalite) * 2}}</span><br/>\n    <span> PA : {{pa}}</span> <span> PM : {{pm}}</span>\n  </span>\n  <br/>\n  <span>\n    <span>Force : {{+force + +bonusForce}} ({{force}} + {{bonusForce}})</span>\n    <span>Agilité : {{+agilite + +bonusAgilite}} ({{agilite}} + {{bonusAgilite}})</span>\n    <span>Intelligence : {{+intelligence + +bonusIntelligence}} ({{intelligence}} + {{bonusIntelligence}})</span>\n  </span>\n</span>\n");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/app.component.html":
/*!**************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/app.component.html ***!
  \**************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<!--The content below is only a placeholder and can be replaced.-->\r\n<app-menu></app-menu>\r\n<router-outlet></router-outlet>\r\n\r\n");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/choix-personnage/choix-personnage.component.html":
/*!***********************************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/choix-personnage/choix-personnage.component.html ***!
  \***********************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<div class=\"totale\">\r\n  <div><a routerLink=\"personnage/6\" id=\"Magmaticien\"><img src=\"../../../assets/FondEcran/demoniste.jpg\"></a></div>\r\n  <div><a routerLink=\"personnage/7\" id=\"Franklin\"><img src=\"../../../assets/FondEcran/voleur.jpg\"></a></div>\r\n  <div><a routerLink=\"personnage/8\" id=\"Centaure\"><img src=\"../../../assets/FondEcran/sang.jpg\"></a></div>\r\n  <div><a routerLink=\"personnage/9\" id=\"Assassin\"><img src=\"../../../assets/FondEcran/paladin.jpg\"></a></div>\r\n</div>\r\n");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/combatSession.component.html":
/*!***************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/combatSession.component.html ***!
  \***************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<app-personnage [Id_Personnage]=\"actualCharacterID\"></app-personnage>\r\n");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/competence-effect/competence-effect.component.html":
/*!*************************************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/competence-effect/competence-effect.component.html ***!
  \*************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<p>competence-effect works!</p>\r\n");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/competence-icon/competence-icon.component.html":
/*!*********************************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/competence-icon/competence-icon.component.html ***!
  \*********************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<span *ngIf=\"Image\">\r\n  <img alt=\"Image Competence\" src=\"assets/{{Image}}\" [id]=\"Id_Competence\">\r\n</span>\r\n");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/competence/competence.component.html":
/*!***********************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/competence/competence.component.html ***!
  \***********************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<div>\r\n  <div [innerHTML]=\"getDescription()\">\r\n  </div>\r\n  <button class=\"btn btn-success\" (click)=\"competenceInteraction()\">Utiliser</button>\r\n</div>\r\n");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/new-competence/new-competence.component.html":
/*!*******************************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/new-competence/new-competence.component.html ***!
  \*******************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<p>new-competence works!</p>\n");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/personnage-icon/personnage-icon.component.html":
/*!*********************************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/personnage-icon/personnage-icon.component.html ***!
  \*********************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<p>personnage-icon works!</p>\r\n");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/personnage/personnage.component.html":
/*!***********************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/personnage/personnage.component.html ***!
  \***********************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<div *ngIf=\"Statistiques\">\r\n  <button (click)=\"refreshData()\" class=\"btn btn-primary\"> Refresh </button><button (click)=\"resetCombat()\" id=\"resetCombat\" class=\"btn btn btn-warning\"> Reset Combat </button>\r\n  <h3 id=\"Libelle\">{{Libelle}}</h3>\r\n  <h5><span style=\"margin-right : 15px;\">Niveau : {{+Niveau}}</span> <span>Vie : {{+PDV_Actuel}} / {{(+Vitalite + +BonusVitalite)*2}}</span></h5>\r\n  <h6><span style=\"margin-right : 15px\">PA : {{+PA_Actuel}}</span> <span  style=\"margin-right : 15px\">PM : {{+PM_Actuel}}\r\n  </span><span style=\"margin-right : 15px;\">Armure : {{+Statistiques.Armure + Statistiques.BonusArmure}} </span></h6>\r\n  <table>\r\n    <tbody>\r\n    <tr><td>Force </td> <td>{{+Force + +BonusForce}}</td><td>({{+Force}} + {{+BonusForce}})</td></tr>\r\n    <tr><td>Intelligence </td><td>{{+Intelligence + +BonusIntelligence}}</td><td>({{+Intelligence}} + {{+BonusIntelligence}})</td></tr>\r\n    <tr><td>Agilité </td><td>{{+Agilite + +BonusAgilite}}</td><td>({{+Agilite}} + {{+BonusAgilite}})</td></tr>\r\n    <tr><td>Vitalité </td><td>{{(+Vitalite + +BonusVitalite)}}</td><td>({{+Vitalite}} + {{+BonusVitalite}})</td></tr>\r\n    </tbody>\r\n  </table>\r\n</div>\r\n<div>\r\n\r\n  <h5><span style=\"margin-right : 15px;\">Bonus Combat : </span></h5>\r\n  <table *ngIf=\"Statistiques\">\r\n    <tbody>\r\n    <tr><td>Intelligence </td><td>{{Statistiques.bonusCombat.Intelligence}}</td></tr>\r\n    <tr><td>PA </td><td>{{Statistiques.bonusCombat.PA}}</td></tr>\r\n    <tr *ngIf=\"Statistiques.bonusCombat.DegatsPhysiqueFlat != 0 \"><td>FlatDamagePhysique </td><td>{{Statistiques.bonusCombat.DegatsPhysiqueFlat}}</td></tr>\r\n    <tr *ngIf=\"Statistiques.bonusCombat.Force != 0\"><td>FlatDamagePhysique </td><td>{{Statistiques.bonusCombat.Force}}</td></tr>\r\n    </tbody>\r\n  </table>\r\n</div>\r\n\r\n\r\n\r\n<div>\r\n  <app-competence-icon *ngFor=\"let competence of CompetencesID; index as i\"\r\n                [Id_Competence]=\"CompetencesID[i]\"\r\n                [routerLink]=\"[ { outlets: { Competence: [ CompetencesID[i] ] } }]\"></app-competence-icon>\r\n</div>\r\n\r\n<router-outlet name=\"Competence\"></router-outlet>\r\n\r\n\r\n<jw-modal id=\"useCompetence\">\r\n  <h1>A Tall Custom Modal!</h1>\r\n  <div id=\"modalMessage\" style=\"min-height: 24px\"></div>\r\n  <div id=\"modalBody\"></div>\r\n  <span><button class=\"btn btn-danger\" id=\"closeCompetenceModal\">Close</button> <button class=\"btn btn-success\" id=\"executeCompetenceModal\">Valider</button></span>\r\n</jw-modal>\r\n\r\n");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/menu/menu.component.html":
/*!********************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/menu/menu.component.html ***!
  \********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<div class=\"main\">\r\n  <ul class=\"mainnav\">\r\n    <li class=\"li\"></li>\r\n    <li class=\"li\"> <a routerLink=\"choixPersonnages\"> <strong> Accueil </strong> </a>  </li>\r\n    <li class=\"hassubs li\"> <a routerLink=\"choixPersonnages\"> <strong> Arbres </strong> </a>\r\n      <ul class=\"dropdown\">\r\n        <li class=\"subs\"><a routerLink=\"choixPersonnages\">Magnaticien</a></li>\r\n        <li class=\"subs\"><a routerLink=\"choixPersonnages\">Franklin</a></li>\r\n        <li class=\"subs\"><a routerLink=\"choixPersonnages\">Centaure</a></li>\r\n        <li class=\"subs\"><a routerLink=\"choixPersonnages\">Assassin</a></li>\r\n      </ul>\r\n    </li>\r\n    <li class=\"li\"> <a routerLink=\"choixPersonnages\"> <strong> Combat </strong> </a> </li>\r\n    <li class=\"li\"> <a routerLink=\"choixPersonnages\"> <strong> Items </strong> </a>  </li>\r\n    <li class=\"li\"> <a routerLink=\"addEffect\"> <strong> Gérer personnage </strong> </a>  </li>\r\n  </ul>\r\n</div>\r\n");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/modal-focus/modal-focus.html":
/*!************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/modal-focus/modal-focus.html ***!
  \************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("");

/***/ }),

/***/ "./src/app/_modal/index.ts":
/*!*********************************!*\
  !*** ./src/app/_modal/index.ts ***!
  \*********************************/
/*! exports provided: ModalModule, ModalService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modal_module__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modal.module */ "./src/app/_modal/modal.module.ts");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "ModalModule", function() { return _modal_module__WEBPACK_IMPORTED_MODULE_0__["ModalModule"]; });

/* harmony import */ var _modal_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modal.service */ "./src/app/_modal/modal.service.ts");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "ModalService", function() { return _modal_service__WEBPACK_IMPORTED_MODULE_1__["ModalService"]; });





/***/ }),

/***/ "./src/app/_modal/modal.component.less":
/*!*********************************************!*\
  !*** ./src/app/_modal/modal.component.less ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("/* MODAL STYLES\n-------------------------------*/\njw-modal {\n  /* modals are hidden by default */\n  display: none;\n}\njw-modal .jw-modal {\n  /* modal container fixed across whole screen */\n  position: fixed;\n  top: 0;\n  right: 0;\n  bottom: 0;\n  left: 0;\n  /* z-index must be higher than .jw-modal-background */\n  z-index: 1000;\n  /* enables scrolling for tall modals */\n  overflow: auto;\n}\njw-modal .jw-modal .jw-modal-body {\n  padding: 20px;\n  background: #fff;\n  /* margin exposes part of the modal background */\n  /*** Personalizing ***/\n  min-height: 90vh;\n  margin: 2% 20%;\n  border-radius: 15px;\n}\njw-modal .jw-modal-background {\n  /* modal background fixed across whole screen */\n  position: fixed;\n  top: 0;\n  right: 0;\n  bottom: 0;\n  left: 0;\n  /* semi-transparent black  */\n  background-color: #000;\n  opacity: 0.75;\n  /* z-index must be below .jw-modal and above everything else  */\n  z-index: 900;\n}\nbody.jw-modal-open {\n  /* body overflow is hidden to hide main scrollbar when modal window is open */\n  overflow: hidden;\n}\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvX21vZGFsL21vZGFsLmNvbXBvbmVudC5sZXNzIiwic3JjL2FwcC9fbW9kYWwvQzovd2FtcDY0L3d3dy9Bbmd1bGFyUlAvc3JjL2FwcC9fbW9kYWwvbW9kYWwuY29tcG9uZW50Lmxlc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7Z0NBQ2dDO0FDQ2hDO0VEQ0UsaUNBQWlDO0VDQy9CLGFBQUE7QURDSjtBQ0hBO0VES0UsOENBQThDO0VDQ3hDLGVBQUE7RUFDQSxNQUFBO0VBQ0EsUUFBQTtFQUNBLFNBQUE7RUFDQSxPQUFBO0VEQ04scURBQXFEO0VDRS9DLGFBQUE7RURBTixzQ0FBc0M7RUNHaEMsY0FBQTtBRERSO0FDZkE7RUFtQlksYUFBQTtFQUNBLGdCQUFBO0VERFYsZ0RBQWdEO0VBQ2hELHNCQUFzQjtFQ0tkLGdCQUFBO0VBQ0EsY0FBQTtFQUNBLG1CQUFBO0FESFY7QUN4QkE7RUQwQkUsK0NBQStDO0VDT3pDLGVBQUE7RUFDQSxNQUFBO0VBQ0EsUUFBQTtFQUNBLFNBQUE7RUFDQSxPQUFBO0VETE4sNEJBQTRCO0VDUXRCLHNCQUFBO0VBQ0EsYUFBQTtFRE5OLCtEQUErRDtFQ1N6RCxZQUFBO0FEUFI7QUNXQTtFRFRFLDZFQUE2RTtFQ1czRSxnQkFBQTtBRFRKIiwiZmlsZSI6InNyYy9hcHAvX21vZGFsL21vZGFsLmNvbXBvbmVudC5sZXNzIiwic291cmNlc0NvbnRlbnQiOlsiLyogTU9EQUwgU1RZTEVTXG4tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tKi9cbmp3LW1vZGFsIHtcbiAgLyogbW9kYWxzIGFyZSBoaWRkZW4gYnkgZGVmYXVsdCAqL1xuICBkaXNwbGF5OiBub25lO1xufVxuanctbW9kYWwgLmp3LW1vZGFsIHtcbiAgLyogbW9kYWwgY29udGFpbmVyIGZpeGVkIGFjcm9zcyB3aG9sZSBzY3JlZW4gKi9cbiAgcG9zaXRpb246IGZpeGVkO1xuICB0b3A6IDA7XG4gIHJpZ2h0OiAwO1xuICBib3R0b206IDA7XG4gIGxlZnQ6IDA7XG4gIC8qIHotaW5kZXggbXVzdCBiZSBoaWdoZXIgdGhhbiAuanctbW9kYWwtYmFja2dyb3VuZCAqL1xuICB6LWluZGV4OiAxMDAwO1xuICAvKiBlbmFibGVzIHNjcm9sbGluZyBmb3IgdGFsbCBtb2RhbHMgKi9cbiAgb3ZlcmZsb3c6IGF1dG87XG59XG5qdy1tb2RhbCAuanctbW9kYWwgLmp3LW1vZGFsLWJvZHkge1xuICBwYWRkaW5nOiAyMHB4O1xuICBiYWNrZ3JvdW5kOiAjZmZmO1xuICAvKiBtYXJnaW4gZXhwb3NlcyBwYXJ0IG9mIHRoZSBtb2RhbCBiYWNrZ3JvdW5kICovXG4gIC8qKiogUGVyc29uYWxpemluZyAqKiovXG4gIG1pbi1oZWlnaHQ6IDkwdmg7XG4gIG1hcmdpbjogMiUgMjAlO1xuICBib3JkZXItcmFkaXVzOiAxNXB4O1xufVxuanctbW9kYWwgLmp3LW1vZGFsLWJhY2tncm91bmQge1xuICAvKiBtb2RhbCBiYWNrZ3JvdW5kIGZpeGVkIGFjcm9zcyB3aG9sZSBzY3JlZW4gKi9cbiAgcG9zaXRpb246IGZpeGVkO1xuICB0b3A6IDA7XG4gIHJpZ2h0OiAwO1xuICBib3R0b206IDA7XG4gIGxlZnQ6IDA7XG4gIC8qIHNlbWktdHJhbnNwYXJlbnQgYmxhY2sgICovXG4gIGJhY2tncm91bmQtY29sb3I6ICMwMDA7XG4gIG9wYWNpdHk6IDAuNzU7XG4gIC8qIHotaW5kZXggbXVzdCBiZSBiZWxvdyAuanctbW9kYWwgYW5kIGFib3ZlIGV2ZXJ5dGhpbmcgZWxzZSAgKi9cbiAgei1pbmRleDogOTAwO1xufVxuYm9keS5qdy1tb2RhbC1vcGVuIHtcbiAgLyogYm9keSBvdmVyZmxvdyBpcyBoaWRkZW4gdG8gaGlkZSBtYWluIHNjcm9sbGJhciB3aGVuIG1vZGFsIHdpbmRvdyBpcyBvcGVuICovXG4gIG92ZXJmbG93OiBoaWRkZW47XG59XG4iLCIvKiBNT0RBTCBTVFlMRVNcbi0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0qL1xuanctbW9kYWwge1xuICAgIC8qIG1vZGFscyBhcmUgaGlkZGVuIGJ5IGRlZmF1bHQgKi9cbiAgICBkaXNwbGF5OiBub25lO1xuXG4gICAgLmp3LW1vZGFsIHtcbiAgICAgICAgLyogbW9kYWwgY29udGFpbmVyIGZpeGVkIGFjcm9zcyB3aG9sZSBzY3JlZW4gKi9cbiAgICAgICAgcG9zaXRpb246IGZpeGVkO1xuICAgICAgICB0b3A6IDA7XG4gICAgICAgIHJpZ2h0OiAwO1xuICAgICAgICBib3R0b206IDA7XG4gICAgICAgIGxlZnQ6IDA7XG5cbiAgICAgICAgLyogei1pbmRleCBtdXN0IGJlIGhpZ2hlciB0aGFuIC5qdy1tb2RhbC1iYWNrZ3JvdW5kICovXG4gICAgICAgIHotaW5kZXg6IDEwMDA7XG5cbiAgICAgICAgLyogZW5hYmxlcyBzY3JvbGxpbmcgZm9yIHRhbGwgbW9kYWxzICovXG4gICAgICAgIG92ZXJmbG93OiBhdXRvO1xuXG4gICAgICAgIC5qdy1tb2RhbC1ib2R5IHtcbiAgICAgICAgICAgIHBhZGRpbmc6IDIwcHg7XG4gICAgICAgICAgICBiYWNrZ3JvdW5kOiAjZmZmO1xuXG4gICAgICAgICAgICAvKiBtYXJnaW4gZXhwb3NlcyBwYXJ0IG9mIHRoZSBtb2RhbCBiYWNrZ3JvdW5kICovXG4gICAgICAgICAgICAvL21hcmdpbjogNDBweDtcbiAgICAgICAgICAvKioqIFBlcnNvbmFsaXppbmcgKioqL1xuICAgICAgICAgIG1pbi1oZWlnaHQ6IDkwdmg7XG4gICAgICAgICAgbWFyZ2luOiAyJSAyMCU7XG4gICAgICAgICAgYm9yZGVyLXJhZGl1czogMTVweDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC5qdy1tb2RhbC1iYWNrZ3JvdW5kIHtcbiAgICAgICAgLyogbW9kYWwgYmFja2dyb3VuZCBmaXhlZCBhY3Jvc3Mgd2hvbGUgc2NyZWVuICovXG4gICAgICAgIHBvc2l0aW9uOiBmaXhlZDtcbiAgICAgICAgdG9wOiAwO1xuICAgICAgICByaWdodDogMDtcbiAgICAgICAgYm90dG9tOiAwO1xuICAgICAgICBsZWZ0OiAwO1xuXG4gICAgICAgIC8qIHNlbWktdHJhbnNwYXJlbnQgYmxhY2sgICovXG4gICAgICAgIGJhY2tncm91bmQtY29sb3I6ICMwMDA7XG4gICAgICAgIG9wYWNpdHk6IDAuNzU7XG5cbiAgICAgICAgLyogei1pbmRleCBtdXN0IGJlIGJlbG93IC5qdy1tb2RhbCBhbmQgYWJvdmUgZXZlcnl0aGluZyBlbHNlICAqL1xuICAgICAgICB6LWluZGV4OiA5MDA7XG4gICAgfVxufVxuXG5ib2R5Lmp3LW1vZGFsLW9wZW4ge1xuICAgIC8qIGJvZHkgb3ZlcmZsb3cgaXMgaGlkZGVuIHRvIGhpZGUgbWFpbiBzY3JvbGxiYXIgd2hlbiBtb2RhbCB3aW5kb3cgaXMgb3BlbiAqL1xuICAgIG92ZXJmbG93OiBoaWRkZW47XG59XG4iXX0= */");

/***/ }),

/***/ "./src/app/_modal/modal.component.ts":
/*!*******************************************!*\
  !*** ./src/app/_modal/modal.component.ts ***!
  \*******************************************/
/*! exports provided: ModalComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ModalComponent", function() { return ModalComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _modal_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modal.service */ "./src/app/_modal/modal.service.ts");



let ModalComponent = class ModalComponent {
    constructor(modalService, el) {
        this.modalService = modalService;
        this.el = el;
        this.element = el.nativeElement;
    }
    ngOnInit() {
        // ensure id attribute exists
        if (!this.id) {
            console.error('modal must have an id');
            return;
        }
        // move element to bottom of page (just before </body>) so it can be displayed above everything else
        document.body.appendChild(this.element);
        /*
        // close modal on background click
        this.element.addEventListener('click', el => {
            if (el.target.className === 'jw-modal') {
                this.close();
            }
        });
       */
        // add self (this modal instance) to the modal service so it's accessible from controllers
        this.modalService.add(this);
    }
    // remove self from modal service when component is destroyed
    ngOnDestroy() {
        this.modalService.remove(this.id);
        this.element.remove();
    }
    // open modal
    open() {
        this.element.style.display = 'block';
        document.body.classList.add('jw-modal-open');
    }
    // close modal
    close() {
        this.element.style.display = 'none';
        document.body.classList.remove('jw-modal-open');
    }
};
ModalComponent.ctorParameters = () => [
    { type: _modal_service__WEBPACK_IMPORTED_MODULE_2__["ModalService"] },
    { type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ElementRef"] }
];
ModalComponent.propDecorators = {
    id: [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"] }]
};
ModalComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'jw-modal',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!./modal.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/_modal/modal.component.html")).default,
        encapsulation: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewEncapsulation"].None,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./modal.component.less */ "./src/app/_modal/modal.component.less")).default]
    })
], ModalComponent);



/***/ }),

/***/ "./src/app/_modal/modal.module.ts":
/*!****************************************!*\
  !*** ./src/app/_modal/modal.module.ts ***!
  \****************************************/
/*! exports provided: ModalModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ModalModule", function() { return ModalModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm2015/common.js");
/* harmony import */ var _modal_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./modal.component */ "./src/app/_modal/modal.component.ts");




let ModalModule = class ModalModule {
};
ModalModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"]],
        declarations: [_modal_component__WEBPACK_IMPORTED_MODULE_3__["ModalComponent"]],
        exports: [_modal_component__WEBPACK_IMPORTED_MODULE_3__["ModalComponent"]]
    })
], ModalModule);



/***/ }),

/***/ "./src/app/_modal/modal.service.ts":
/*!*****************************************!*\
  !*** ./src/app/_modal/modal.service.ts ***!
  \*****************************************/
/*! exports provided: ModalService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ModalService", function() { return ModalService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let ModalService = class ModalService {
    constructor() {
        this.modals = [];
    }
    add(modal) {
        // add modal to array of active modals
        this.modals.push(modal);
    }
    remove(id) {
        // remove modal from array of active modals
        this.modals = this.modals.filter(x => x.id !== id);
    }
    open(id) {
        // open modal specified by id
        const modal = this.modals.find(x => x.id === id);
        modal.open();
    }
    close(id) {
        // close modal specified by id
        const modal = this.modals.find(x => x.id === id);
        modal.close();
    }
};
ModalService = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])({ providedIn: 'root' })
], ModalService);



/***/ }),

/***/ "./src/app/ad.directive.ts":
/*!*********************************!*\
  !*** ./src/app/ad.directive.ts ***!
  \*********************************/
/*! exports provided: AdDirective */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AdDirective", function() { return AdDirective; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let AdDirective = class AdDirective {
    constructor(viewContainerRef) {
        this.viewContainerRef = viewContainerRef;
    }
};
AdDirective.ctorParameters = () => [
    { type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewContainerRef"] }
];
AdDirective = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Directive"])({
        // tslint:disable-next-line:directive-selector
        selector: '[ad-host]',
    })
], AdDirective);

/*
Copyright Google LLC. All Rights Reserved.
Use of this source code is governed by an MIT-style license that
can be found in the LICENSE file at http://angular.io/license
*/


/***/ }),

/***/ "./src/app/addCompetenceEffect/add-competence-effect/add-competence-effect-routing.module.ts":
/*!***************************************************************************************************!*\
  !*** ./src/app/addCompetenceEffect/add-competence-effect/add-competence-effect-routing.module.ts ***!
  \***************************************************************************************************/
/*! exports provided: AddCompetenceEffectRoutingModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AddCompetenceEffectRoutingModule", function() { return AddCompetenceEffectRoutingModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _add_competence_effect_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./add-competence-effect.component */ "./src/app/addCompetenceEffect/add-competence-effect/add-competence-effect.component.ts");
/* harmony import */ var _personnage_add_competence_effect_personnage_add_competence_effect_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../personnage-add-competence-effect/personnage-add-competence-effect.component */ "./src/app/addCompetenceEffect/personnage-add-competence-effect/personnage-add-competence-effect.component.ts");
/* harmony import */ var _competence_add_competence_effect_competence_add_competence_effect_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../competence-add-competence-effect/competence-add-competence-effect.component */ "./src/app/addCompetenceEffect/competence-add-competence-effect/competence-add-competence-effect.component.ts");
/* harmony import */ var _effect_add_competence_effect_effect_add_competence_effect_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../effect-add-competence-effect/effect-add-competence-effect.component */ "./src/app/addCompetenceEffect/effect-add-competence-effect/effect-add-competence-effect.component.ts");







const routes = [
    {
        path: 'addEffect', component: _add_competence_effect_component__WEBPACK_IMPORTED_MODULE_3__["AddCompetenceEffectComponent"],
        children: [
            { path: ':idPersonnage', component: _personnage_add_competence_effect_personnage_add_competence_effect_component__WEBPACK_IMPORTED_MODULE_4__["PersonnageAddCompetenceEffectComponent"], outlet: 'personnageAddCompetenceEffect' },
            {
                path: ':idCompetence', component: _competence_add_competence_effect_competence_add_competence_effect_component__WEBPACK_IMPORTED_MODULE_5__["CompetenceAddCompetenceEffectComponent"], outlet: 'competenceAddCompetenceEffect',
                children: [
                    { path: ':idEffect', component: _effect_add_competence_effect_effect_add_competence_effect_component__WEBPACK_IMPORTED_MODULE_6__["EffectAddCompetenceEffectComponent"], outlet: 'effectAddCompetenceEffect' },
                ]
            }
        ]
    },
];
let AddCompetenceEffectRoutingModule = class AddCompetenceEffectRoutingModule {
};
AddCompetenceEffectRoutingModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"].forChild(routes)],
        exports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"]]
    })
], AddCompetenceEffectRoutingModule);



/***/ }),

/***/ "./src/app/addCompetenceEffect/add-competence-effect/add-competence-effect.component.scss":
/*!************************************************************************************************!*\
  !*** ./src/app/addCompetenceEffect/add-competence-effect/add-competence-effect.component.scss ***!
  \************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("#fakebody {\n  background-image: url('228090286-black-and-brown-wallpaper.jpg');\n  /* The image used */\n  background-position: center;\n  /* Center the image */\n  background-repeat: no-repeat;\n  /* Do not repeat the image */\n  background-size: cover;\n  /* Resize the background image to cover the entire container */\n  color: white;\n  margin: 0 auto;\n  padding: 1px;\n  min-height: 100vh;\n  width: 100%;\n}\n\n.principal {\n  min-width: 80%;\n  min-height: 89%;\n  margin: 2% 9% 2% 9%;\n  background-color: rgba(25, 7, 7, 0.85);\n  border-radius: 15px;\n  padding: 50px;\n  display: flex;\n  flex-wrap: wrap;\n}\n\n.caracterSelection, #caracterSelection {\n  width: 100%;\n  padding: 25px;\n  background-color: rgba(12, 4, 4, 0.55);\n  border-radius: 5px;\n}\n\n#hiddenPersonnageSelection {\n  padding: 15px;\n  background-color: rgba(12, 4, 4, 0.85);\n  border-radius: 0 15px 15px 15px;\n  display: none;\n  opacity: 0;\n}\n\nul, li, #divImageSelectedPersonnage, #imageSelectedPersonnage {\n  list-style-type: none;\n  padding: 0;\n}\n\n#hiddenPersonnageSelection img {\n  height: 50px;\n  border-radius: 50px;\n}\n\n#divPersonnage {\n  display: flex;\n  height: 75px;\n  margin-bottom: 50px;\n}\n\n#divImageSelectedPersonnage {\n  margin-right: 50px;\n}\n\n#divImageSelectedPersonnage, #imageSelectedPersonnage {\n  height: 75px;\n  width: 75px;\n  border-radius: 50px;\n}\n\n#divImageSelectedPersonnage:hover #hiddenPersonnageSelection, #hiddenPersonnageSelection:hover #hiddenPersonnageSelection {\n  display: block;\n  opacity: 1;\n  z-index: 1000;\n}\n\n#hiddenPersonnageSelection {\n  transition: all ease-in-out 2s;\n  position: absolute;\n}\n\n.buttonSelectCompetence {\n  font-size: 12px;\n  width: 100%;\n}\n\n#competenceList li {\n  margin: 2px;\n  background-color: rgba(100, 25, 25, 0.8);\n  border: solid 1px rgba(75, 20, 20, 0.8);\n  border-radius: 5px;\n  font-size: 14px;\n}\n\n#competenceList li img {\n  height: 32px;\n  border-radius: 5px;\n  margin-right: 7px;\n}\n\n#effectSelection, #competenceSelection {\n  min-height: 50vh;\n}\n\n#competenceSelection {\n  overflow: auto;\n  display: inline-block;\n  width: 21%;\n  min-width: 150px;\n  max-width: 250px;\n  margin-right: 1%;\n  max-height: 50vh;\n}\n\n#effectSelection {\n  padding: 20px;\n  display: inline-block;\n  border-style: solid;\n  border-width: 2px;\n  border-color: rgba(75, 20, 20, 0.8);\n  width: 75%;\n}\n\nbutton {\n  font-size: 10px;\n}\n\n/* --- Scrollbar --- */\n\n.mCS-rounded-dots.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar,\n.mCS-rounded-dots.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar {\n  background-color: rgba(100, 25, 25, 0.9);\n  background-color: rgba(100, 25, 25, 0.9);\n}\n\n.mCS-rounded-dots.mCSB_scrollTools .mCSB_dragger_bar {\n  background-color: rgba(175, 0, 0, 0.5);\n  background-color: rgba(175, 0, 0, 0.5);\n}\n\n#competenceSelection .mCSB_dragger:hover .mCSB_dragger_bar,\n#competenceSelection .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar {\n  background-color: rgba(100, 25, 25, 0.9);\n  background-color: rgba(100, 25, 25, 0.9);\n}\n\n#competenceSelection .mCSB_dragger_bar {\n  background-color: rgba(175, 0, 0, 0.5);\n  background-color: rgba(175, 0, 0, 0.5);\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvYWRkQ29tcGV0ZW5jZUVmZmVjdC9hZGQtY29tcGV0ZW5jZS1lZmZlY3QvYWRkLWNvbXBldGVuY2UtZWZmZWN0LmNvbXBvbmVudC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0UsZ0VBQUE7RUFBdUYsbUJBQUE7RUFDdkYsMkJBQUE7RUFBNkIscUJBQUE7RUFDN0IsNEJBQUE7RUFBOEIsNEJBQUE7RUFDOUIsc0JBQUE7RUFBd0IsOERBQUE7RUFDeEIsWUFBQTtFQUNBLGNBQUE7RUFDQSxZQUFBO0VBRUEsaUJBQUE7RUFDQSxXQUFBO0FBSUY7O0FBREE7RUFDRSxjQUFBO0VBQ0EsZUFBQTtFQUNBLG1CQUFBO0VBQ0Esc0NBQUE7RUFDQSxtQkFBQTtFQUNBLGFBQUE7RUFDQSxhQUFBO0VBQ0EsZUFBQTtBQUlGOztBQURBO0VBQ0UsV0FBQTtFQUNBLGFBQUE7RUFDQSxzQ0FBQTtFQUNBLGtCQUFBO0FBSUY7O0FBRkE7RUFDRSxhQUFBO0VBQ0Esc0NBQUE7RUFDQSwrQkFBQTtFQUNBLGFBQUE7RUFDQSxVQUFBO0FBS0Y7O0FBRkE7RUFDRSxxQkFBQTtFQUNBLFVBQUE7QUFLRjs7QUFGQTtFQUNFLFlBQUE7RUFDQSxtQkFBQTtBQUtGOztBQUZBO0VBQ0UsYUFBQTtFQUNBLFlBQUE7RUFDQSxtQkFBQTtBQUtGOztBQUhBO0VBQ0Usa0JBQUE7QUFNRjs7QUFIQTtFQUNFLFlBQUE7RUFDQSxXQUFBO0VBQ0EsbUJBQUE7QUFNRjs7QUFIQTtFQUNFLGNBQUE7RUFDQSxVQUFBO0VBQ0EsYUFBQTtBQU1GOztBQUhBO0VBQ0UsOEJBQUE7RUFDQSxrQkFBQTtBQU1GOztBQUhBO0VBQ0UsZUFBQTtFQUNBLFdBQUE7QUFNRjs7QUFIQTtFQUNFLFdBQUE7RUFDQSx3Q0FBQTtFQUNBLHVDQUFBO0VBQ0Esa0JBQUE7RUFDQSxlQUFBO0FBTUY7O0FBRkE7RUFDRSxZQUFBO0VBQ0Esa0JBQUE7RUFDQSxpQkFBQTtBQUtGOztBQUZBO0VBQ0UsZ0JBQUE7QUFLRjs7QUFGQTtFQUNFLGNBQUE7RUFDQSxxQkFBQTtFQUNBLFVBQUE7RUFDQSxnQkFBQTtFQUNBLGdCQUFBO0VBQ0EsZ0JBQUE7RUFDQSxnQkFBQTtBQUtGOztBQUZBO0VBQ0UsYUFBQTtFQUNBLHFCQUFBO0VBQ0EsbUJBQUE7RUFDQSxpQkFBQTtFQUNBLG1DQUFBO0VBQ0EsVUFBQTtBQUtGOztBQUZBO0VBQ0UsZUFBQTtBQUtGOztBQUZBLHNCQUFBOztBQUNBOztFQUN3Rix3Q0FBQTtFQUEwQyx3Q0FBQTtBQU9sSTs7QUFOQTtFQUFzRCxzQ0FBQTtFQUFxQyxzQ0FBQTtBQVczRjs7QUFSQTs7RUFDMEUsd0NBQUE7RUFBMEMsd0NBQUE7QUFhcEg7O0FBWkE7RUFBd0Msc0NBQUE7RUFBcUMsc0NBQUE7QUFpQjdFIiwiZmlsZSI6InNyYy9hcHAvYWRkQ29tcGV0ZW5jZUVmZmVjdC9hZGQtY29tcGV0ZW5jZS1lZmZlY3QvYWRkLWNvbXBldGVuY2UtZWZmZWN0LmNvbXBvbmVudC5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiI2Zha2Vib2R5IHtcclxuICBiYWNrZ3JvdW5kLWltYWdlOiB1cmwoXCIuLi8uLi8uLi9hc3NldHMvZm9uZC8yMjgwOTAyODYtYmxhY2stYW5kLWJyb3duLXdhbGxwYXBlci5qcGdcIik7IC8qIFRoZSBpbWFnZSB1c2VkICovXHJcbiAgYmFja2dyb3VuZC1wb3NpdGlvbjogY2VudGVyOyAvKiBDZW50ZXIgdGhlIGltYWdlICovXHJcbiAgYmFja2dyb3VuZC1yZXBlYXQ6IG5vLXJlcGVhdDsgLyogRG8gbm90IHJlcGVhdCB0aGUgaW1hZ2UgKi9cclxuICBiYWNrZ3JvdW5kLXNpemU6IGNvdmVyOyAvKiBSZXNpemUgdGhlIGJhY2tncm91bmQgaW1hZ2UgdG8gY292ZXIgdGhlIGVudGlyZSBjb250YWluZXIgKi9cclxuICBjb2xvcjogd2hpdGU7XHJcbiAgbWFyZ2luOiAwIGF1dG87XHJcbiAgcGFkZGluZzogMXB4O1xyXG4gIC8vIG1hcmdpbjogLTFweDtcclxuICBtaW4taGVpZ2h0IDogMTAwdmg7XHJcbiAgd2lkdGg6IDEwMCU7XHJcbn1cclxuXHJcbi5wcmluY2lwYWwge1xyXG4gIG1pbi13aWR0aCA6IDgwJTtcclxuICBtaW4taGVpZ2h0IDogODklO1xyXG4gIG1hcmdpbjogMiUgOSUgMiUgOSU7XHJcbiAgYmFja2dyb3VuZC1jb2xvcjogcmdiYSgyNSwgNywgNywgMC44NSk7XHJcbiAgYm9yZGVyLXJhZGl1czogMTVweDtcclxuICBwYWRkaW5nIDogNTBweDtcclxuICBkaXNwbGF5OiBmbGV4O1xyXG4gIGZsZXgtd3JhcDogd3JhcDtcclxufVxyXG5cclxuLmNhcmFjdGVyU2VsZWN0aW9uLCAjY2FyYWN0ZXJTZWxlY3Rpb24ge1xyXG4gIHdpZHRoIDogMTAwJTtcclxuICBwYWRkaW5nIDogMjVweDtcclxuICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDEyLCA0LCA0LCAwLjU1KTtcclxuICBib3JkZXItcmFkaXVzOiA1cHg7XHJcbn1cclxuI2hpZGRlblBlcnNvbm5hZ2VTZWxlY3Rpb24ge1xyXG4gIHBhZGRpbmcgOiAxNXB4O1xyXG4gIGJhY2tncm91bmQtY29sb3I6IHJnYmEoMTIsIDQsIDQsIDAuODUpO1xyXG4gIGJvcmRlci1yYWRpdXM6IDAgMTVweCAxNXB4IDE1cHg7XHJcbiAgZGlzcGxheTogbm9uZTtcclxuICBvcGFjaXR5OiAwO1xyXG59XHJcblxyXG51bCwgbGksICNkaXZJbWFnZVNlbGVjdGVkUGVyc29ubmFnZSwgI2ltYWdlU2VsZWN0ZWRQZXJzb25uYWdlIHtcclxuICBsaXN0LXN0eWxlLXR5cGU6IG5vbmU7XHJcbiAgcGFkZGluZyA6IDA7XHJcbn1cclxuXHJcbiNoaWRkZW5QZXJzb25uYWdlU2VsZWN0aW9uIGltZyB7XHJcbiAgaGVpZ2h0OiA1MHB4O1xyXG4gIGJvcmRlci1yYWRpdXM6IDUwcHg7XHJcbn1cclxuXHJcbiNkaXZQZXJzb25uYWdlIHtcclxuICBkaXNwbGF5OiBmbGV4O1xyXG4gIGhlaWdodCA6IDc1cHg7XHJcbiAgbWFyZ2luLWJvdHRvbTogNTBweDtcclxufVxyXG4jZGl2SW1hZ2VTZWxlY3RlZFBlcnNvbm5hZ2Uge1xyXG4gIG1hcmdpbi1yaWdodCA6IDUwcHg7XHJcbn1cclxuXHJcbiNkaXZJbWFnZVNlbGVjdGVkUGVyc29ubmFnZSwgI2ltYWdlU2VsZWN0ZWRQZXJzb25uYWdlIHtcclxuICBoZWlnaHQgOiA3NXB4O1xyXG4gIHdpZHRoIDogNzVweDtcclxuICBib3JkZXItcmFkaXVzOiA1MHB4O1xyXG59XHJcblxyXG4jZGl2SW1hZ2VTZWxlY3RlZFBlcnNvbm5hZ2U6aG92ZXIgI2hpZGRlblBlcnNvbm5hZ2VTZWxlY3Rpb24sICNoaWRkZW5QZXJzb25uYWdlU2VsZWN0aW9uOmhvdmVyICNoaWRkZW5QZXJzb25uYWdlU2VsZWN0aW9ue1xyXG4gIGRpc3BsYXk6IGJsb2NrO1xyXG4gIG9wYWNpdHk6IDE7XHJcbiAgei1pbmRleDogMTAwMDtcclxufVxyXG5cclxuI2hpZGRlblBlcnNvbm5hZ2VTZWxlY3Rpb24ge1xyXG4gIHRyYW5zaXRpb246IGFsbCBlYXNlLWluLW91dCAycztcclxuICBwb3NpdGlvbiA6IGFic29sdXRlO1xyXG59XHJcblxyXG4uYnV0dG9uU2VsZWN0Q29tcGV0ZW5jZSB7XHJcbiAgZm9udC1zaXplOiAxMnB4O1xyXG4gIHdpZHRoIDogMTAwJTtcclxufVxyXG5cclxuI2NvbXBldGVuY2VMaXN0IGxpIHtcclxuICBtYXJnaW4gOiAycHg7XHJcbiAgYmFja2dyb3VuZC1jb2xvcjogcmdiYSgxMDAsIDI1LCAyNSwgMC44KTtcclxuICBib3JkZXI6IHNvbGlkIDFweCByZ2JhKDc1LDIwLDIwLDAuOCk7XHJcbiAgYm9yZGVyLXJhZGl1czogNXB4O1xyXG4gIGZvbnQtc2l6ZSA6IDE0cHg7XHJcbn1cclxuXHJcblxyXG4jY29tcGV0ZW5jZUxpc3QgbGkgaW1nIHtcclxuICBoZWlnaHQgOiAzMnB4O1xyXG4gIGJvcmRlci1yYWRpdXM6IDVweDtcclxuICBtYXJnaW4tcmlnaHQgOiA3cHg7XHJcbn1cclxuXHJcbiNlZmZlY3RTZWxlY3Rpb24sICNjb21wZXRlbmNlU2VsZWN0aW9uIHtcclxuICBtaW4taGVpZ2h0IDogNTB2aDtcclxufVxyXG5cclxuI2NvbXBldGVuY2VTZWxlY3Rpb24ge1xyXG4gIG92ZXJmbG93OiBhdXRvO1xyXG4gIGRpc3BsYXkgOiBpbmxpbmUtYmxvY2s7XHJcbiAgd2lkdGggOiAyMSU7XHJcbiAgbWluLXdpZHRoIDogMTUwcHg7XHJcbiAgbWF4LXdpZHRoIDogMjUwcHg7XHJcbiAgbWFyZ2luLXJpZ2h0OiAxJTtcclxuICBtYXgtaGVpZ2h0OiA1MHZoO1xyXG59XHJcblxyXG4jZWZmZWN0U2VsZWN0aW9uIHtcclxuICBwYWRkaW5nIDogMjBweDtcclxuICBkaXNwbGF5IDogaW5saW5lLWJsb2NrO1xyXG4gIGJvcmRlci1zdHlsZTogc29saWQ7XHJcbiAgYm9yZGVyLXdpZHRoOiAycHg7XHJcbiAgYm9yZGVyLWNvbG9yOiByZ2JhKDc1LDIwLDIwLDAuOCk7XHJcbiAgd2lkdGggOiA3NSU7XHJcbn1cclxuXHJcbmJ1dHRvbiB7XHJcbiAgZm9udC1zaXplIDogMTBweDtcclxufVxyXG5cclxuLyogLS0tIFNjcm9sbGJhciAtLS0gKi9cclxuLm1DUy1yb3VuZGVkLWRvdHMubUNTQl9zY3JvbGxUb29scyAubUNTQl9kcmFnZ2VyOmhvdmVyIC5tQ1NCX2RyYWdnZXJfYmFyLFxyXG4ubUNTLXJvdW5kZWQtZG90cy5tQ1NCX3Njcm9sbFRvb2xzIC5tQ1NCX2RyYWdnZXIubUNTQl9kcmFnZ2VyX29uRHJhZyAubUNTQl9kcmFnZ2VyX2JhcnsgYmFja2dyb3VuZC1jb2xvcjogcmdiYSgxMDAsIDI1LCAyNSwgMC45KTsgYmFja2dyb3VuZC1jb2xvcjogcmdiYSgxMDAsIDI1LCAyNSwgMC45KTsgfVxyXG4ubUNTLXJvdW5kZWQtZG90cy5tQ1NCX3Njcm9sbFRvb2xzIC5tQ1NCX2RyYWdnZXJfYmFyeyBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDE3NSwwLDAsMC41KTsgYmFja2dyb3VuZC1jb2xvcjogcmdiYSgxNzUsMCwwLDAuNSk7IH1cclxuXHJcblxyXG4jY29tcGV0ZW5jZVNlbGVjdGlvbiAubUNTQl9kcmFnZ2VyOmhvdmVyIC5tQ1NCX2RyYWdnZXJfYmFyLFxyXG4jY29tcGV0ZW5jZVNlbGVjdGlvbiAubUNTQl9kcmFnZ2VyLm1DU0JfZHJhZ2dlcl9vbkRyYWcgLm1DU0JfZHJhZ2dlcl9iYXJ7IGJhY2tncm91bmQtY29sb3I6IHJnYmEoMTAwLCAyNSwgMjUsIDAuOSk7IGJhY2tncm91bmQtY29sb3I6IHJnYmEoMTAwLCAyNSwgMjUsIDAuOSk7IH1cclxuI2NvbXBldGVuY2VTZWxlY3Rpb24gLm1DU0JfZHJhZ2dlcl9iYXJ7IGJhY2tncm91bmQtY29sb3I6IHJnYmEoMTc1LDAsMCwwLjUpOyBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDE3NSwwLDAsMC41KTsgfVxyXG4iXX0= */");

/***/ }),

/***/ "./src/app/addCompetenceEffect/add-competence-effect/add-competence-effect.component.ts":
/*!**********************************************************************************************!*\
  !*** ./src/app/addCompetenceEffect/add-competence-effect/add-competence-effect.component.ts ***!
  \**********************************************************************************************/
/*! exports provided: AddCompetenceEffectComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AddCompetenceEffectComponent", function() { return AddCompetenceEffectComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _personnage_add_competence_effect_personnage_add_competence_effect_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../personnage-add-competence-effect/personnage-add-competence-effect.component */ "./src/app/addCompetenceEffect/personnage-add-competence-effect/personnage-add-competence-effect.component.ts");
/* harmony import */ var _service_rest_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../service/rest.service */ "./src/app/service/rest.service.ts");
/* harmony import */ var rxjs_operators__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! rxjs/operators */ "./node_modules/rxjs/_esm2015/operators/index.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm2015/http.js");
/* harmony import */ var _service_statistiques_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../service/statistiques.service */ "./src/app/service/statistiques.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _service_effect_add_competence_effect_service__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../../service/effect-add-competence-effect.service */ "./src/app/service/effect-add-competence-effect.service.ts");
/* harmony import */ var _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! @ng-bootstrap/ng-bootstrap */ "./node_modules/@ng-bootstrap/ng-bootstrap/fesm2015/ng-bootstrap.js");
/* harmony import */ var _modal_focus_modal_focus__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ../../modal-focus/modal-focus */ "./src/app/modal-focus/modal-focus.ts");











const MODALS = {
    focusFirst: _modal_focus_modal_focus__WEBPACK_IMPORTED_MODULE_10__["NgbdModalConfirm"],
    autofocus: _modal_focus_modal_focus__WEBPACK_IMPORTED_MODULE_10__["NgbdModalConfirmAutofocus"],
};
let AddCompetenceEffectComponent = class AddCompetenceEffectComponent {
    constructor(statistiquesService, effectAddCompetenceEffectService, http, route, modalService) {
        this.statistiquesService = statistiquesService;
        this.effectAddCompetenceEffectService = effectAddCompetenceEffectService;
        this.http = http;
        this.route = route;
        this.modalService = modalService;
        this.idPersonnage = -1;
        this.idCompetence = -1;
        this.idEffect = -1;
        this.creatingSkill = false;
        this.personnagesList = [];
        this.competenceList = [];
        this.effectList = [];
        this.contextmenu = false;
        this.contextmenuX = 0;
        this.contextmenuY = 0;
        this.scrollbarOptions = { axis: 'y', theme: 'rounded-dots' };
        this.route.params.subscribe(params => {
            this.idPersonnage = params.idPersonnage === undefined ? -1 : this.idPersonnage;
            this.idCompetence = params.idCompetence === undefined ? -1 : this.idCompetence;
            this.idEffect = params.idEffect === undefined ? -1 : this.idEffect;
        });
        effectAddCompetenceEffectService.loadService(this.http);
        this.effectAddCompetenceEffectService.addEffectCompetenceComponent = this;
    }
    ngOnInit() {
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_3__["BASE_URL"] + '/Classes/version_mobile/REST/personnagesAddCompetenceEffectRest.php';
        const personnageAddCompetenceEffectComponentObservable = this.http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_4__["map"])((data) => data.map(item => item)));
        const personnageAddCompetenceEffectComponentSuscription = personnageAddCompetenceEffectComponentObservable.subscribe((value) => {
            for (const val of value) {
                const newPersonnage = new _personnage_add_competence_effect_personnage_add_competence_effect_component__WEBPACK_IMPORTED_MODULE_2__["PersonnageAddCompetenceEffectComponent"](this.statistiquesService, this.effectAddCompetenceEffectService, this.http, this.route, this.modalService);
                newPersonnage.adaptFromInside(val);
                this.personnagesList.push(newPersonnage);
            }
            // this.personnagesList = value;
            personnageAddCompetenceEffectComponentSuscription.unsubscribe();
        }, (error) => {
            console.log('Une erreur est survenue dans la suscription: ' + error);
        }, () => {
        });
    }
    ngAfterViewInit() {
        // @ts-ignore
    }
    ngOnDestroy() {
    }
    notifyPersonnageSelection(idPersonnage) {
        this.competenceList = [];
        this.idPersonnage = idPersonnage;
        this.personnage = this.personnagesList.find(personnage => personnage.idPersonnage === this.idPersonnage);
        this.competenceList = this.personnage.getCompetences();
        document.getElementById('imageSelectedPersonnage').setAttribute('src', this.personnage.icon);
    }
    reloadCompetences() {
        if (this.idPersonnage !== -1 && this.idPersonnage !== undefined && this.personnage !== null && this.personnage !== undefined) {
            this.competenceList = this.personnage.getCompetences();
        }
    }
    notifyCompetenceSelection(idCompetence) {
        this.effectList = [];
        this.idCompetence = idCompetence;
        this.competence = this.competenceList.find(competence => competence.idCompetence === this.idCompetence);
        this.effectList = this.competence.effectList;
    }
    getCompetenceList() {
        return this.competenceList;
    }
    addCompetenceToList() {
        if (!this.creatingSkill) {
            const input = document.createElement('input');
            input.classList.add('form-control');
            input.style.width = '100%';
            input.id = 'inputAddCompetenceToList';
            const div = document.createElement('div');
            div.classList.add('col-md-3');
            div.id = 'divAddCompetenceToList';
            div.style.maxWidth = '100%';
            div.style.margin = '5px';
            div.style.marginRight = '15px';
            div.style.paddingLeft = '0px';
            div.style.paddingRight = '7px';
            div.appendChild(input);
            const thisAddEffect = this;
            input.addEventListener('keypress', e => {
                if (e.key === 'Enter') {
                    thisAddEffect.open('autofocus');
                }
            });
            input.addEventListener('keydown', e => {
                if (e.key === 'Escape') {
                    console.log('Escape');
                    document.getElementById('inputAddCompetenceToList').remove();
                    document.getElementById('divAddCompetenceToList').remove();
                    this.creatingSkill = !this.creatingSkill;
                }
            });
            const list = document.getElementById('competenceList');
            list.prepend(div);
            this.creatingSkill = !this.creatingSkill;
            input.focus();
        }
    }
    open(name) {
        const input = document.getElementById('inputAddCompetenceToList');
        const modalRef = this.modalService.open(MODALS[name]);
        modalRef.componentInstance.modalTitle = 'CompetenceEffect deletion';
        modalRef.componentInstance.modalContent = '<p>' +
            '<strong>Es-tu sûr de vouloir ajouter <span class="text-primary">"' + input.value + '"</span> comme compétence, ' +
            ' à <span class="text-info">' + this.personnage.libelle + '</span> ?</strong>' +
            '</p>    ' +
            '<p>Toute information associée à cet compétence sera ajoutée de manière permanente.   ' +
            ' <span class="text-warning">Cette opération ne pourra être annulée.</span>    ' +
            '</p>';
        modalRef.result.then(() => {
            this.effectAddCompetenceEffectService.addCompetenceToCharacter(input.value).then((data) => {
                console.log(data);
                document.getElementById('inputAddCompetenceToList').remove();
                document.getElementById('divAddCompetenceToList').remove();
                this.creatingSkill = !this.creatingSkill;
                this.competenceList = this.personnage.getCompetences();
            });
        });
    }
    onrightClick(event, idCompetence, competenceName) {
        event.preventDefault();
        event.stopPropagation();
        this.contextmenuX = event.clientX;
        this.contextmenuY = event.clientY;
        this.contextmenu = true;
        this.righClickCompetence = idCompetence;
        this.rightClickedCompetenceName = competenceName;
    }
    // disables the menu
    disableContextMenu() {
        this.contextmenu = false;
    }
};
AddCompetenceEffectComponent.ctorParameters = () => [
    { type: _service_statistiques_service__WEBPACK_IMPORTED_MODULE_6__["StatistiquesService"] },
    { type: _service_effect_add_competence_effect_service__WEBPACK_IMPORTED_MODULE_8__["EffectAddCompetenceEffectService"] },
    { type: _angular_common_http__WEBPACK_IMPORTED_MODULE_5__["HttpClient"] },
    { type: _angular_router__WEBPACK_IMPORTED_MODULE_7__["ActivatedRoute"] },
    { type: _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_9__["NgbModal"] }
];
AddCompetenceEffectComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-add-competence-effect',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!./add-competence-effect.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/addCompetenceEffect/add-competence-effect/add-competence-effect.component.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./add-competence-effect.component.scss */ "./src/app/addCompetenceEffect/add-competence-effect/add-competence-effect.component.scss")).default]
    })
], AddCompetenceEffectComponent);



/***/ }),

/***/ "./src/app/addCompetenceEffect/add-competence-effect/add-competence-effect.module.ts":
/*!*******************************************************************************************!*\
  !*** ./src/app/addCompetenceEffect/add-competence-effect/add-competence-effect.module.ts ***!
  \*******************************************************************************************/
/*! exports provided: AddCompetenceEffectModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AddCompetenceEffectModule", function() { return AddCompetenceEffectModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm2015/common.js");
/* harmony import */ var _add_competence_effect_routing_module__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./add-competence-effect-routing.module */ "./src/app/addCompetenceEffect/add-competence-effect/add-competence-effect-routing.module.ts");
/* harmony import */ var _add_competence_effect_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./add-competence-effect.component */ "./src/app/addCompetenceEffect/add-competence-effect/add-competence-effect.component.ts");
/* harmony import */ var _competence_add_competence_effect_competence_add_competence_effect_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../competence-add-competence-effect/competence-add-competence-effect.component */ "./src/app/addCompetenceEffect/competence-add-competence-effect/competence-add-competence-effect.component.ts");
/* harmony import */ var _personnage_add_competence_effect_personnage_add_competence_effect_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../personnage-add-competence-effect/personnage-add-competence-effect.component */ "./src/app/addCompetenceEffect/personnage-add-competence-effect/personnage-add-competence-effect.component.ts");
/* harmony import */ var _effect_add_competence_effect_effect_add_competence_effect_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../effect-add-competence-effect/effect-add-competence-effect.component */ "./src/app/addCompetenceEffect/effect-add-competence-effect/effect-add-competence-effect.component.ts");
/* harmony import */ var _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! @ng-bootstrap/ng-bootstrap */ "./node_modules/@ng-bootstrap/ng-bootstrap/fesm2015/ng-bootstrap.js");
/* harmony import */ var _fortawesome_angular_fontawesome__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! @fortawesome/angular-fontawesome */ "./node_modules/@fortawesome/angular-fontawesome/fesm2015/angular-fontawesome.js");
/* harmony import */ var _safe_pipe__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ../../safe.pipe */ "./src/app/safe.pipe.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");
/* harmony import */ var _modal_focus_modal_focus_module__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ../../modal-focus/modal-focus.module */ "./src/app/modal-focus/modal-focus.module.ts");
/* harmony import */ var _context_menu_competence_context_menu_competence_component__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ../context-menu-competence/context-menu-competence.component */ "./src/app/addCompetenceEffect/context-menu-competence/context-menu-competence.component.ts");














let AddCompetenceEffectModule = class AddCompetenceEffectModule {
};
AddCompetenceEffectModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        declarations: [
            _add_competence_effect_component__WEBPACK_IMPORTED_MODULE_4__["AddCompetenceEffectComponent"],
            _personnage_add_competence_effect_personnage_add_competence_effect_component__WEBPACK_IMPORTED_MODULE_6__["PersonnageAddCompetenceEffectComponent"],
            _competence_add_competence_effect_competence_add_competence_effect_component__WEBPACK_IMPORTED_MODULE_5__["CompetenceAddCompetenceEffectComponent"],
            _effect_add_competence_effect_effect_add_competence_effect_component__WEBPACK_IMPORTED_MODULE_7__["EffectAddCompetenceEffectComponent"],
            _safe_pipe__WEBPACK_IMPORTED_MODULE_10__["SafePipe"],
            _context_menu_competence_context_menu_competence_component__WEBPACK_IMPORTED_MODULE_13__["ContextMenuCompetenceComponent"],
        ],
        imports: [
            _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"],
            _add_competence_effect_routing_module__WEBPACK_IMPORTED_MODULE_3__["AddCompetenceEffectRoutingModule"],
            _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_8__["NgbModule"],
            _fortawesome_angular_fontawesome__WEBPACK_IMPORTED_MODULE_9__["FontAwesomeModule"],
            _angular_forms__WEBPACK_IMPORTED_MODULE_11__["FormsModule"],
            _modal_focus_modal_focus_module__WEBPACK_IMPORTED_MODULE_12__["NgbdModalFocusModule"],
        ]
    })
], AddCompetenceEffectModule);



/***/ }),

/***/ "./src/app/addCompetenceEffect/competence-add-competence-effect/competence-add-competence-effect.component.scss":
/*!**********************************************************************************************************************!*\
  !*** ./src/app/addCompetenceEffect/competence-add-competence-effect/competence-add-competence-effect.component.scss ***!
  \**********************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("ul, li {\n  list-style-type: none;\n  padding: 0;\n}\n\n#effectList li div {\n  margin: 2px;\n  background-color: rgba(100, 25, 25, 0.8);\n  border: solid 1px rgba(75, 20, 20, 0.8);\n  border-radius: 5px;\n  padding: 5px;\n  width: 90%;\n  display: inline-block;\n  font-size: 14px;\n}\n\n#effectList li > span {\n  display: inline-block;\n  margin: 5px;\n  background-color: rgba(100, 25, 25, 0.8);\n  border: solid 1px rgba(75, 20, 20, 0.8);\n  border-radius: 5px;\n  padding: 5px;\n}\n\n#effectList fa-icon {\n  margin: auto;\n}\n\nbutton {\n  font-size: 13px;\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvYWRkQ29tcGV0ZW5jZUVmZmVjdC9jb21wZXRlbmNlLWFkZC1jb21wZXRlbmNlLWVmZmVjdC9jb21wZXRlbmNlLWFkZC1jb21wZXRlbmNlLWVmZmVjdC5jb21wb25lbnQuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUNFLHFCQUFBO0VBQ0EsVUFBQTtBQUNGOztBQUtBO0VBQ0UsV0FBQTtFQUNBLHdDQUFBO0VBQ0EsdUNBQUE7RUFDQSxrQkFBQTtFQUNBLFlBQUE7RUFDQSxVQUFBO0VBQ0EscUJBQUE7RUFDQSxlQUFBO0FBRkY7O0FBS0E7RUFDRSxxQkFBQTtFQUNBLFdBQUE7RUFDQSx3Q0FBQTtFQUNBLHVDQUFBO0VBQ0Esa0JBQUE7RUFDQSxZQUFBO0FBRkY7O0FBS0E7RUFDRSxZQUFBO0FBRkY7O0FBS0E7RUFDRSxlQUFBO0FBRkYiLCJmaWxlIjoic3JjL2FwcC9hZGRDb21wZXRlbmNlRWZmZWN0L2NvbXBldGVuY2UtYWRkLWNvbXBldGVuY2UtZWZmZWN0L2NvbXBldGVuY2UtYWRkLWNvbXBldGVuY2UtZWZmZWN0LmNvbXBvbmVudC5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsidWwsIGxpIHtcclxuICBsaXN0LXN0eWxlLXR5cGU6IG5vbmU7XHJcbiAgcGFkZGluZyA6IDA7XHJcbn1cclxuXHJcbiNlZmZlY3RMaXN0IGxpIHtcclxufVxyXG5cclxuI2VmZmVjdExpc3QgbGkgZGl2IHtcclxuICBtYXJnaW4gOiAycHg7XHJcbiAgYmFja2dyb3VuZC1jb2xvcjogcmdiYSgxMDAsIDI1LCAyNSwgMC44KTtcclxuICBib3JkZXI6IHNvbGlkIDFweCByZ2JhKDc1LDIwLDIwLDAuOCk7XHJcbiAgYm9yZGVyLXJhZGl1czogNXB4O1xyXG4gIHBhZGRpbmc6IDVweDtcclxuICB3aWR0aCA6IDkwJTtcclxuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XHJcbiAgZm9udC1zaXplOiAxNHB4O1xyXG59XHJcblxyXG4jZWZmZWN0TGlzdCBsaSA+IHNwYW57XHJcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xyXG4gIG1hcmdpbiA6IDVweDtcclxuICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDEwMCwgMjUsIDI1LCAwLjgpO1xyXG4gIGJvcmRlcjogc29saWQgMXB4IHJnYmEoNzUsMjAsMjAsMC44KTtcclxuICBib3JkZXItcmFkaXVzOiA1cHg7XHJcbiAgcGFkZGluZzogNXB4O1xyXG59XHJcblxyXG4jZWZmZWN0TGlzdCBmYS1pY29ue1xyXG4gIG1hcmdpbjogYXV0bztcclxufVxyXG5cclxuYnV0dG9uIHtcclxuICBmb250LXNpemUgOiAxM3B4O1xyXG59XHJcbiJdfQ== */");

/***/ }),

/***/ "./src/app/addCompetenceEffect/competence-add-competence-effect/competence-add-competence-effect.component.ts":
/*!********************************************************************************************************************!*\
  !*** ./src/app/addCompetenceEffect/competence-add-competence-effect/competence-add-competence-effect.component.ts ***!
  \********************************************************************************************************************/
/*! exports provided: CompetenceAddCompetenceEffectComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "CompetenceAddCompetenceEffectComponent", function() { return CompetenceAddCompetenceEffectComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm2015/http.js");
/* harmony import */ var _service_rest_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../service/rest.service */ "./src/app/service/rest.service.ts");
/* harmony import */ var rxjs_operators__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! rxjs/operators */ "./node_modules/rxjs/_esm2015/operators/index.js");
/* harmony import */ var _effect_add_competence_effect_effect_add_competence_effect_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../effect-add-competence-effect/effect-add-competence-effect.component */ "./src/app/addCompetenceEffect/effect-add-competence-effect/effect-add-competence-effect.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _service_statistiques_service__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../service/statistiques.service */ "./src/app/service/statistiques.service.ts");
/* harmony import */ var _service_effect_add_competence_effect_service__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../../service/effect-add-competence-effect.service */ "./src/app/service/effect-add-competence-effect.service.ts");
/* harmony import */ var _fortawesome_free_solid_svg_icons__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! @fortawesome/free-solid-svg-icons */ "./node_modules/@fortawesome/free-solid-svg-icons/index.es.js");
/* harmony import */ var _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! @ng-bootstrap/ng-bootstrap */ "./node_modules/@ng-bootstrap/ng-bootstrap/fesm2015/ng-bootstrap.js");
/* harmony import */ var _modal_focus_modal_focus__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ../../modal-focus/modal-focus */ "./src/app/modal-focus/modal-focus.ts");












const MODALS = {
    focusFirst: _modal_focus_modal_focus__WEBPACK_IMPORTED_MODULE_11__["NgbdModalConfirm"],
    autofocus: _modal_focus_modal_focus__WEBPACK_IMPORTED_MODULE_11__["NgbdModalConfirmAutofocus"]
};
let CompetenceAddCompetenceEffectComponent = class CompetenceAddCompetenceEffectComponent {
    constructor(http, route, statistiquesService, effectAddCompetenceEffectService, modalService) {
        this.http = http;
        this.route = route;
        this.statistiquesService = statistiquesService;
        this.effectAddCompetenceEffectService = effectAddCompetenceEffectService;
        this.modalService = modalService;
        this.faMinusCircle = _fortawesome_free_solid_svg_icons__WEBPACK_IMPORTED_MODULE_9__["faMinusCircle"];
        this.effectList = [];
        this.effectSelectedEmitter = new _angular_core__WEBPACK_IMPORTED_MODULE_1__["EventEmitter"]();
        this.route.params.subscribe(params => {
            this.idCompetence = params.idCompetence;
            if (this.idCompetence !== undefined) {
                this.init();
                this.getEffects();
                this.idEffect = undefined;
                this.effectAddCompetenceEffectService.competenceAddEffectCompetenceComponent = this;
            }
        });
        this.modalOptions = {
            backdrop: 'static',
            backdropClass: 'customBackdrop'
        };
    }
    init() {
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_3__["BASE_URL"] + '/Classes/version_mobile/REST/competenceAddCompetenceEffectRest.php?id=' + this.idCompetence;
        const competenceAddCompetenceEffectComponentObservable = this.http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_4__["map"])((item) => this.adaptFromInside(item)));
        const competenceAddCompetenceEffectComponentSuscription = competenceAddCompetenceEffectComponentObservable.subscribe(() => {
            competenceAddCompetenceEffectComponentSuscription.unsubscribe();
        }, (error) => {
            console.log('Une erreur est survenue dans la suscription: ' + error);
        }, () => {
        });
    }
    open(name, idCompetenceEffect) {
        const modalRef = this.modalService.open(MODALS[name]);
        modalRef.componentInstance.modalTitle = 'CompetenceEffect deletion';
        modalRef.componentInstance.modalContent = '<p>' +
            '<strong>Es-tu sûr de vouloir supprimer cet effet de  <span class="text-primary">"' + this.libelle + '"</span> ?</strong>' +
            '</p>    ' +
            '<p>Toute information associée à cet effet de compétence sera supprimée de manière permanente.   ' +
            ' <span class="text-danger">Cette opération ne pourra être annulée.</span>    ' +
            '</p>';
        modalRef.result.then(() => {
            this.effectAddCompetenceEffectService.deleteEffect(idCompetenceEffect);
        }, (reason => {
            this.closeResult = `Dismissed ${this.getDismissReason(reason)}`;
        }));
    }
    getDismissReason(reason) {
        if (reason === _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_10__["ModalDismissReasons"].ESC) {
            return 'by pressing ESC';
        }
        else if (reason === _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_10__["ModalDismissReasons"].BACKDROP_CLICK) {
            return 'by clicking on a backdrop';
        }
        else {
            return `with: ${reason}`;
        }
    }
    ngOnInit() {
    }
    notifyEffectSelection(idEffect) {
        this.idEffect = idEffect;
        this.effectSelectedEmitter.emit(this.idEffect);
    }
    getEffects() {
        this.effectList = [];
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_3__["BASE_URL"] + '/Classes/version_mobile/REST/effectsAddCompetenceEffectRest.php?id=' + this.idCompetence;
        const effectAddCompetenceEffectComponentObservable = this.http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_4__["map"])((data) => data.map(item => item)));
        const effectAddCompetenceEffectComponentSuscription = effectAddCompetenceEffectComponentObservable.subscribe((value) => {
            for (const effect of value) {
                const newEffect = new _effect_add_competence_effect_effect_add_competence_effect_component__WEBPACK_IMPORTED_MODULE_5__["EffectAddCompetenceEffectComponent"](this.http, this.route, this.statistiquesService, this.effectAddCompetenceEffectService);
                newEffect.idCompetenceEffect = effect.idCompetenceEffect;
                newEffect.adaptFromInside(effect);
                this.effectList.push(newEffect);
            }
            // this.effectList = value;
            effectAddCompetenceEffectComponentSuscription.unsubscribe();
        }, (error) => { console.log('Une erreur est survenue dans la suscription: ' + error); }, () => { });
        return this.effectList;
    }
    adaptFromInside(item) {
        this.idCompetence = item.Id_Competence;
        this.libelle = item.Libellé;
        this.image = item.Image;
    }
    getImage() {
        return '../../assets/' + this.image;
    }
    updateCompetence() {
        if (this.idEffect === -1) {
        }
        else if (this.idEffect > 0) {
        }
    }
};
CompetenceAddCompetenceEffectComponent.ctorParameters = () => [
    { type: _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpClient"] },
    { type: _angular_router__WEBPACK_IMPORTED_MODULE_6__["ActivatedRoute"] },
    { type: _service_statistiques_service__WEBPACK_IMPORTED_MODULE_7__["StatistiquesService"] },
    { type: _service_effect_add_competence_effect_service__WEBPACK_IMPORTED_MODULE_8__["EffectAddCompetenceEffectService"] },
    { type: _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_10__["NgbModal"] }
];
CompetenceAddCompetenceEffectComponent.propDecorators = {
    effectSelectedEmitter: [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Output"] }]
};
CompetenceAddCompetenceEffectComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-competence-add-competence-effect',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!./competence-add-competence-effect.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/addCompetenceEffect/competence-add-competence-effect/competence-add-competence-effect.component.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./competence-add-competence-effect.component.scss */ "./src/app/addCompetenceEffect/competence-add-competence-effect/competence-add-competence-effect.component.scss")).default]
    })
], CompetenceAddCompetenceEffectComponent);



/***/ }),

/***/ "./src/app/addCompetenceEffect/context-menu-competence/context-menu-competence.component.scss":
/*!****************************************************************************************************!*\
  !*** ./src/app/addCompetenceEffect/context-menu-competence/context-menu-competence.component.scss ***!
  \****************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".contextmenu {\n  color: #DF2626;\n  position: absolute;\n  margin: 2px;\n  background-color: #641919;\n  border: solid 2px black;\n  border-radius: 5px;\n  padding: 5px;\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvYWRkQ29tcGV0ZW5jZUVmZmVjdC9jb250ZXh0LW1lbnUtY29tcGV0ZW5jZS9jb250ZXh0LW1lbnUtY29tcGV0ZW5jZS5jb21wb25lbnQuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUNFLGNBQUE7RUFDQSxrQkFBQTtFQUNBLFdBQUE7RUFDQSx5QkFBQTtFQUNBLHVCQUFBO0VBQ0Esa0JBQUE7RUFDQSxZQUFBO0FBQ0YiLCJmaWxlIjoic3JjL2FwcC9hZGRDb21wZXRlbmNlRWZmZWN0L2NvbnRleHQtbWVudS1jb21wZXRlbmNlL2NvbnRleHQtbWVudS1jb21wZXRlbmNlLmNvbXBvbmVudC5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiLmNvbnRleHRtZW51e1xyXG4gIGNvbG9yOiAjREYyNjI2O1xyXG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcclxuICBtYXJnaW4gOiAycHg7XHJcbiAgYmFja2dyb3VuZC1jb2xvcjogcmdiYSgxMDAsIDI1LCAyNSwgMSk7XHJcbiAgYm9yZGVyOiBzb2xpZCAycHggYmxhY2s7XHJcbiAgYm9yZGVyLXJhZGl1czogNXB4O1xyXG4gIHBhZGRpbmcgOiA1cHg7XHJcbn1cclxuIl19 */");

/***/ }),

/***/ "./src/app/addCompetenceEffect/context-menu-competence/context-menu-competence.component.ts":
/*!**************************************************************************************************!*\
  !*** ./src/app/addCompetenceEffect/context-menu-competence/context-menu-competence.component.ts ***!
  \**************************************************************************************************/
/*! exports provided: ContextMenuCompetenceComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ContextMenuCompetenceComponent", function() { return ContextMenuCompetenceComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _modal_focus_modal_focus__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../modal-focus/modal-focus */ "./src/app/modal-focus/modal-focus.ts");
/* harmony import */ var _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @ng-bootstrap/ng-bootstrap */ "./node_modules/@ng-bootstrap/ng-bootstrap/fesm2015/ng-bootstrap.js");
/* harmony import */ var _service_effect_add_competence_effect_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../service/effect-add-competence-effect.service */ "./src/app/service/effect-add-competence-effect.service.ts");





const MODALS = {
    focusFirst: _modal_focus_modal_focus__WEBPACK_IMPORTED_MODULE_2__["NgbdModalConfirm"],
    autofocus: _modal_focus_modal_focus__WEBPACK_IMPORTED_MODULE_2__["NgbdModalConfirmAutofocus"],
};
let ContextMenuCompetenceComponent = class ContextMenuCompetenceComponent {
    constructor(modalService, effectAddCompetenceEffectService) {
        this.modalService = modalService;
        this.effectAddCompetenceEffectService = effectAddCompetenceEffectService;
        this.x = 0;
        this.y = 0;
        this.idCompetence = 0;
        this.idPersonnage = 0;
        this.competenceName = '';
    }
    ngOnInit() {
    }
    skillDeletionPopover(name) {
        this.effectAddCompetenceEffectService.addEffectCompetenceComponent.disableContextMenu();
        const modalRef = this.modalService.open(MODALS[name]);
        modalRef.componentInstance.modalTitle = 'CompetenceEffect deletion';
        modalRef.componentInstance.modalContent = '<p>' +
            '<strong>Es-tu sûr de vouloir supprimer la compétence <span class="text-primary">"' + this.competenceName + '"</span> ?</strong>' +
            '</p>    ' +
            '<p>Toute information associée à cette compétence sera supprimée de manière permanente.   ' +
            ' <span class="text-danger">Cette opération ne pourra être annulée.</span>    ' +
            '</p>';
        modalRef.result.then((result) => {
            this.effectAddCompetenceEffectService.deleteCompetence(this.idCompetence, this.idPersonnage);
        }, (reason => { }));
    }
};
ContextMenuCompetenceComponent.ctorParameters = () => [
    { type: _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_3__["NgbModal"] },
    { type: _service_effect_add_competence_effect_service__WEBPACK_IMPORTED_MODULE_4__["EffectAddCompetenceEffectService"] }
];
ContextMenuCompetenceComponent.propDecorators = {
    x: [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"] }],
    y: [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"] }],
    idCompetence: [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"] }],
    idPersonnage: [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"] }],
    competenceName: [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"] }]
};
ContextMenuCompetenceComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-context-menu-competence',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!./context-menu-competence.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/addCompetenceEffect/context-menu-competence/context-menu-competence.component.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./context-menu-competence.component.scss */ "./src/app/addCompetenceEffect/context-menu-competence/context-menu-competence.component.scss")).default]
    })
], ContextMenuCompetenceComponent);



/***/ }),

/***/ "./src/app/addCompetenceEffect/effect-add-competence-effect/effect-add-competence-effect.component.scss":
/*!**************************************************************************************************************!*\
  !*** ./src/app/addCompetenceEffect/effect-add-competence-effect/effect-add-competence-effect.component.scss ***!
  \**************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("/* Style the tab */\n.tab {\n  overflow: hidden;\n  border: 1px solid #ccc;\n  background-color: #f1f1f1;\n}\n/* Style the buttons inside the tab */\n.tab button {\n  background-color: inherit;\n  float: left;\n  border: none;\n  outline: none;\n  cursor: pointer;\n  padding: 14px 16px;\n  transition: 0.3s;\n  font-size: 17px;\n}\n/* Change background color of buttons on hover */\n.tab button:hover {\n  background-color: #ddd;\n}\n/* Create an active/current tablink class */\n.tab button.active {\n  background-color: #ccc;\n}\n/* Style the tab content */\n.tabcontent {\n  display: none;\n  padding: 6px 12px;\n  border: 1px solid #ccc;\n  border-top: none;\n  height: 150px;\n  overflow: auto;\n}\n.needs-validation {\n  font-size: 12px;\n}\n.needs-validation input, .needs-validation select, .needs-validation textarea {\n  font-size: 11px;\n}\nbutton {\n  font-size: 13px;\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvYWRkQ29tcGV0ZW5jZUVmZmVjdC9lZmZlY3QtYWRkLWNvbXBldGVuY2UtZWZmZWN0L2VmZmVjdC1hZGQtY29tcGV0ZW5jZS1lZmZlY3QuY29tcG9uZW50LnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUEsa0JBQUE7QUFDQTtFQUNFLGdCQUFBO0VBQ0Esc0JBQUE7RUFDQSx5QkFBQTtBQUNGO0FBRUEscUNBQUE7QUFDQTtFQUNFLHlCQUFBO0VBQ0EsV0FBQTtFQUNBLFlBQUE7RUFDQSxhQUFBO0VBQ0EsZUFBQTtFQUNBLGtCQUFBO0VBQ0EsZ0JBQUE7RUFDQSxlQUFBO0FBQ0Y7QUFFQSxnREFBQTtBQUNBO0VBQ0Usc0JBQUE7QUFDRjtBQUVBLDJDQUFBO0FBQ0E7RUFDRSxzQkFBQTtBQUNGO0FBRUEsMEJBQUE7QUFDQTtFQUNFLGFBQUE7RUFDQSxpQkFBQTtFQUNBLHNCQUFBO0VBQ0EsZ0JBQUE7RUFDQSxhQUFBO0VBQ0EsY0FBQTtBQUNGO0FBRUE7RUFDRSxlQUFBO0FBQ0Y7QUFFQTtFQUNFLGVBQUE7QUFDRjtBQUVBO0VBQ0UsZUFBQTtBQUNGIiwiZmlsZSI6InNyYy9hcHAvYWRkQ29tcGV0ZW5jZUVmZmVjdC9lZmZlY3QtYWRkLWNvbXBldGVuY2UtZWZmZWN0L2VmZmVjdC1hZGQtY29tcGV0ZW5jZS1lZmZlY3QuY29tcG9uZW50LnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyIvKiBTdHlsZSB0aGUgdGFiICovXHJcbi50YWIge1xyXG4gIG92ZXJmbG93OiBoaWRkZW47XHJcbiAgYm9yZGVyOiAxcHggc29saWQgI2NjYztcclxuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZjFmMWYxO1xyXG59XHJcblxyXG4vKiBTdHlsZSB0aGUgYnV0dG9ucyBpbnNpZGUgdGhlIHRhYiAqL1xyXG4udGFiIGJ1dHRvbiB7XHJcbiAgYmFja2dyb3VuZC1jb2xvcjogaW5oZXJpdDtcclxuICBmbG9hdDogbGVmdDtcclxuICBib3JkZXI6IG5vbmU7XHJcbiAgb3V0bGluZTogbm9uZTtcclxuICBjdXJzb3I6IHBvaW50ZXI7XHJcbiAgcGFkZGluZzogMTRweCAxNnB4O1xyXG4gIHRyYW5zaXRpb246IDAuM3M7XHJcbiAgZm9udC1zaXplOiAxN3B4O1xyXG59XHJcblxyXG4vKiBDaGFuZ2UgYmFja2dyb3VuZCBjb2xvciBvZiBidXR0b25zIG9uIGhvdmVyICovXHJcbi50YWIgYnV0dG9uOmhvdmVyIHtcclxuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZGRkO1xyXG59XHJcblxyXG4vKiBDcmVhdGUgYW4gYWN0aXZlL2N1cnJlbnQgdGFibGluayBjbGFzcyAqL1xyXG4udGFiIGJ1dHRvbi5hY3RpdmUge1xyXG4gIGJhY2tncm91bmQtY29sb3I6ICNjY2M7XHJcbn1cclxuXHJcbi8qIFN0eWxlIHRoZSB0YWIgY29udGVudCAqL1xyXG4udGFiY29udGVudCB7XHJcbiAgZGlzcGxheTogbm9uZTtcclxuICBwYWRkaW5nOiA2cHggMTJweDtcclxuICBib3JkZXI6IDFweCBzb2xpZCAjY2NjO1xyXG4gIGJvcmRlci10b3A6IG5vbmU7XHJcbiAgaGVpZ2h0OiAxNTBweDtcclxuICBvdmVyZmxvdzogYXV0b1xyXG59XHJcblxyXG4ubmVlZHMtdmFsaWRhdGlvbntcclxuICBmb250LXNpemU6IDEycHg7XHJcbn1cclxuXHJcbi5uZWVkcy12YWxpZGF0aW9uIGlucHV0LCAubmVlZHMtdmFsaWRhdGlvbiBzZWxlY3QsIC5uZWVkcy12YWxpZGF0aW9uIHRleHRhcmVhIHtcclxuICBmb250LXNpemU6IDExcHg7XHJcbn1cclxuXHJcbmJ1dHRvbiB7XHJcbiAgZm9udC1zaXplIDogMTNweDtcclxufVxyXG4iXX0= */");

/***/ }),

/***/ "./src/app/addCompetenceEffect/effect-add-competence-effect/effect-add-competence-effect.component.ts":
/*!************************************************************************************************************!*\
  !*** ./src/app/addCompetenceEffect/effect-add-competence-effect/effect-add-competence-effect.component.ts ***!
  \************************************************************************************************************/
/*! exports provided: EffectAddCompetenceEffectComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "EffectAddCompetenceEffectComponent", function() { return EffectAddCompetenceEffectComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _service_rest_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../service/rest.service */ "./src/app/service/rest.service.ts");
/* harmony import */ var rxjs_operators__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! rxjs/operators */ "./node_modules/rxjs/_esm2015/operators/index.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm2015/http.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _service_statistiques_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../service/statistiques.service */ "./src/app/service/statistiques.service.ts");
/* harmony import */ var _fortawesome_free_solid_svg_icons__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @fortawesome/free-solid-svg-icons */ "./node_modules/@fortawesome/free-solid-svg-icons/index.es.js");
/* harmony import */ var _service_effect_add_competence_effect_service__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../../service/effect-add-competence-effect.service */ "./src/app/service/effect-add-competence-effect.service.ts");









let EffectAddCompetenceEffectComponent = class EffectAddCompetenceEffectComponent {
    constructor(http, route, statistiquesService, effectAddCompetenceEffectService) {
        this.http = http;
        this.route = route;
        this.statistiquesService = statistiquesService;
        this.effectAddCompetenceEffectService = effectAddCompetenceEffectService;
        this.faQuestionCircle = _fortawesome_free_solid_svg_icons__WEBPACK_IMPORTED_MODULE_7__["faQuestionCircle"];
        this.setStatistiques(this.statistiquesService.getStatistique());
    }
    init() {
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_2__["BASE_URL"] + '/Classes/version_mobile/REST/effectAddCompetenceEffectRest.php?id=' + this.idCompetenceEffect;
        const effectAddCompetenceEffectComponentObservable = this.http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_3__["map"])((item) => this.adaptFromInside(item)));
        const effectAddCompetenceEffectComponentSuscription = effectAddCompetenceEffectComponentObservable.subscribe(() => {
            effectAddCompetenceEffectComponentSuscription.unsubscribe();
        }, (error) => {
            console.log('Une erreur est survenue dans la suscription: ' + error);
        }, () => {
        });
    }
    ngOnInit() {
        this.route.params.subscribe(params => {
            this.idCompetenceEffect = params.idEffect;
            if (this.idCompetenceEffect !== undefined || +this.idCompetenceEffect !== -1) {
                this.init();
                this.setValidateButtonText();
                this.effectAddCompetenceEffectService.effectAddEffectCompetenceComponent = this;
            }
        });
    }
    adaptFromInside(item) {
        this.idCompetenceEffect = item.idCompetenceEffect;
        this.idCompetence = item.idCompetence;
        this.effectOrder = item.effectOrder;
        this.actionType = item.actionType;
        this.effectType = item.effectType;
        this.applicationType = item.applicationType;
        this.niveau = item.niveau;
        this.niveauRequis = item.niveauRequis;
        this.descriptionBefore = item.descriptionBefore;
        this.descriptionAfter = item.descriptionAfter;
        this.typeCalcul = item.typeCalcul;
        this.calcul1A = item.calcul1A;
        this.calcul1B = item.calcul1B;
        this.calcul2A = item.calcul2A;
        this.calcul2B = item.calcul2B;
        this.amplitude = item.amplitude;
        this.nombreAmplitude = item.nombreAmplitude;
        this.statistique1 = item.statistique1;
        this.statistique2 = item.statistique2;
        this.impact = item.impact;
        this.pourcentage = item.pourcentage;
        this.numberOfUse = item.numberOfUse;
        this.numberOfTurn = item.numberOfTurn;
        this.numberOfFight = item.numberOfFight;
        this.numberOfTarget = item.numberOfTarget;
        this.accumulationType = item.accumulationType;
        this.numberOfAccumulation = item.numberOfAccumulation;
        this.successiveAccumulation = item.successiveAccumulation;
        this.linkedEffect = item.linkedEffect;
    }
    setStatistiques(statistiques) {
        this.statistiques = statistiques;
    }
    getEffectValue() {
        if (+this.typeCalcul === 1) {
            return +this.calcul1A + (Math.floor(+this.getStatistique(this.statistique1) / +this.calcul1B));
        }
        else if (+this.typeCalcul === 2) {
            return ((+this.calcul1A + (Math.floor(+this.getStatistique(this.statistique1) / +this.calcul1B)))
                + (+this.calcul2A + (Math.floor(+this.getStatistique(this.statistique2) / +this.calcul2B))));
        }
    }
    getStatistique(statistique) {
        switch (statistique) {
            case 'intelligence':
                return +this.statistiques.Intelligence + +this.statistiques.BonusIntelligence;
            case 'force':
                return +this.statistiques.Force + +this.statistiques.BonusForce;
            case 'agilite':
                return +this.statistiques.Agilite + +this.statistiques.BonusAgilite;
            case 'ressource':
                return +this.statistiques.Ressource + +this.statistiques.BonusRessource;
            case 'vitalite':
                return +this.statistiques.Vitalite + +this.statistiques.BonusVitalite;
            case 'niveau':
                return +this.niveau;
        }
    }
    getEffectDescription() {
        let description = '';
        const calcul = this.getEffectValue();
        switch (+this.actionType) {
            case 1:
            case 2:
                description += 'Inglige ';
                break;
            case 3:
            case 4:
                description += 'Vole ';
                break;
            case 5:
                description += 'Soigne ';
                break;
            case 6:
                description += 'Donne';
                break;
            case 7:
                if (calcul > 0) {
                    description += 'Augmente ';
                }
                else if (calcul < 0) {
                    description += 'Diminue ';
                }
                break;
            case 8:
                description += 'Avant de faire une action, ';
                break;
            case 9:
                description += 'Après avoir fait une action, ';
                break;
            case 10:
                description += 'Avant de lancer une attaque, ';
                break;
            case 11:
                description += 'Après avoir lancé une attaque, ';
                break;
            case 12:
                description += 'Avant de lancer une compétence, ';
                break;
            case 13:
                description += 'Après avoir lancé une compétence, ';
                break;
            case 14:
                description += 'Avant d\'infliger des dégâts, ';
                break;
            case 15:
                description += 'Après avoir infligé des dégâts, ';
                break;
            case 16:
                description += 'Avant d\'infliger des dégâts physiques, ';
                break;
            case 17:
                description += 'Après avoir infligé des dégâts physique, ';
                break;
            case 18:
                description += 'Avant d\'infliger des dégâts magique, ';
                break;
            case 19:
                description += 'Après avoir infligé des dégâts magique, ';
                break;
            case 20:
                description += 'Après de procurer un soin, ';
                break;
            case 21:
                description += 'Après avoir procuré un soin, ';
                break;
            case 22:
                description += 'Avant la récéption d\'une action, ';
                break;
            case 23:
                description += 'Après avoir reçu une action, ';
                break;
            case 24:
                description += 'Avant de recevoir une attaque, ';
                break;
            case 25:
                description += 'Après avoir reçu une attaque, ';
                break;
            case 26:
                description += 'Avant de recevoir une competence, ';
                break;
            case 27:
                description += 'Après avoir reçu une competence, ';
                break;
            case 28:
                description += 'Avant de recevoir des dégâts, ';
                break;
            case 29:
                description += 'Après avoir reçu des dégâts, ';
                break;
            case 30:
                description += 'Avant de recevoir des dégâts physiques, ';
                break;
            case 31:
                description += 'Après avoir reçu des dégâts physique, ';
                break;
            case 32:
                description += 'Avant de recevoir des dégâts magiques, ';
                break;
            case 33:
                description += 'Après avoir reçu des dégâts magiques, ';
                break;
            case 34:
                description += 'Avant de recevoir des soins, ';
                break;
            case 35:
                description += 'Après avoir reçu des soins, ';
                break;
            case 36:
                description += 'En début de tour, ';
                break;
            case 37:
                description += 'En fin de tour, ';
                break;
        }
        if (+this.actionType > 7 && +this.actionType < 35) {
            if (calcul > 0) {
                description += 'augmente ';
            }
            else if (calcul < 0) {
                description += 'diminue ';
            }
        }
        switch (+this.effectType) {
            case 1:
                description += 'les Degats de ';
                break;
            case 2:
                description += 'les Degats de ';
                break;
            case 3:
                description += 'les DegatsPhysique de ';
                break;
            case 4:
                description += 'les DegatsPhysique de ';
                break;
            case 5:
                description += 'les DegatsMagique de ';
                break;
            case 6:
                description += 'les DegatsMagique de ';
                break;
            case 7:
                description += 'la Force de ';
                break;
            case 8:
                description += 'l\'Agilite de ';
                break;
            case 9:
                description += 'l\'Intelligence de ';
                break;
            case 10:
                description += 'la Vitalite de ';
                break;
            case 11:
                description += 'les Pa de ';
                break;
            case 12:
                description += 'les PM de ';
                break;
            case 13:
                description += 'les Degats des sorts de ';
                break;
            case 14:
                description += 'les Degats des sorts de ';
                break;
            case 15:
                description += 'l\'Armure de ';
                break;
            case 16:
                description += 'l\'Armure de ';
                break;
            case 17:
                description += 'l\'Armure Magique de ';
                break;
            case 18:
                description += 'l\'Armure Magique de ';
                break;
            case 19:
                description += 'la réduction des dégâts de ';
                break;
            case 20:
                description += 'la réduction des dégâts de ';
                break;
            case 21:
                description += 'les Soins de ';
                break;
            case 22:
                description += 'les Soins de ';
                break;
            case 23:
                description += 'les Soins reçus de ';
                break;
            case 24:
                description += 'les Soins reçu de ';
                break;
            case 25:
                description += 'l\'IgnoreArmure de ';
                break;
            case 26:
                description += 'l\'IgnoreArmure de ';
                break;
            case 27:
                description += 'l\'IgnoreArmureMagique de ';
                break;
            case 28:
                description += 'l\'IgnoreArmureMagique de ';
                break;
            case 29:
                description += 'le Nombre d\'attaque de ';
                break;
            case 30:
                description += 'la RedirectionDegats de ';
                break;
            case 31:
                description += 'la RedirectionDegats de ';
                break;
            case 32:
                description += 'le RenovieDegats de ';
                break;
            case 33:
                description += 'le RenovieDegats de ';
                break;
            case 34:
                description += 'la Portée de ';
                break;
            case 35:
                description += 'inflige ';
                break;
            case 36:
                description += 'applique des dégâts différés pour un montant de ';
                break;
            case 37:
                description += 'soigne de ';
                break;
            case 38:
                description += 'donne ';
                break;
        }
        description += '' + calcul;
        // TODO: Revoir l'organisation des effect type dans la BDD, pour avoir quelque chose de plus propre. Et permettre les % de stats.
        if (((+this.effectType % 2 === 0 && +this.effectType < 29) ||
            (+this.effectType % 2 === 1 && +this.effectType > 29 && +this.effectType < 34))
            && +this.effectType !== 8 && +this.effectType !== 9 && +this.effectType !== 10
            && +this.effectType !== 11 && +this.effectType !== 12 && +this.actionType > 6) {
            description += '%';
        }
        switch (+this.actionType) {
            case 1:
            case 2:
                description += ' points de dégâts.';
                break;
            case 3:
            case 4:
            case 5:
                description += ' points de vie.';
                break;
            case 6:
                description += ' points de bouclier.';
                break;
        }
        if (+this.effectType === 35) {
            description += ' points de dégâts.';
        }
        else if (+this.effectType === 38) {
            description += ' points de bouclier';
        }
        if (+this.actionType > 6) {
            if (+this.numberOfUse !== null && +this.numberOfUse !== 0) {
                description += ' pour ' + +this.numberOfUse + ' utilisation';
            }
            else if (+this.numberOfTurn && +this.numberOfTurn !== 0) {
                description += ' pour ' + +this.numberOfUse + ' tours';
            }
            else if (+this.numberOfFight && +this.numberOfFight !== 0) {
                description += ' pour ' + +this.numberOfUse + ' combats';
            }
        }
        return description;
    }
    getActionTypePopoverBody() {
        /*
        let actionTypeList = "<ol>";
        for (const actionType of this.effectAddCompetenceEffectService.getActionType()) {
          actionTypeList += '<li>' + actionType.name + '</li>';
        }
        actionTypeList += "</ol>";
        return actionTypeList
        */
        return this.effectAddCompetenceEffectService.getTableActionTypeForPopover();
    }
    getActionTypePopoverTitle() {
        return 'ActionType';
    }
    getEffectTypePopoverBody() {
        /*
        let effectTypeList = "<ol>";
        for (const effectType of this.effectAddCompetenceEffectService.getEffectType()) {
          effectTypeList += '<li>' + effectType.name + '</li>';
        }
        effectTypeList += "</ol>";
        return effectTypeList
        */
        return this.effectAddCompetenceEffectService.getTableEffectTypeForPopover();
    }
    getApplicationTypePopoverTitle() {
        return 'ApplicationType';
    }
    getApplicationTypePopoverBody() {
        /*
        let effectTypeList = "<ol>";
        for (const effectType of this.effectAddCompetenceEffectService.getEffectType()) {
          effectTypeList += '<li>' + effectType.name + '</li>';
        }
        effectTypeList += "</ol>";
        return effectTypeList
        */
        return this.effectAddCompetenceEffectService.getTableApplicationTypeForPopover();
    }
    getEffectTypePopoverTitle() {
        return 'EffectType';
    }
    getTypeCalculToolTip() {
        return 'Type calcul définie le nombre de statistiques à prendre en compte.<br/>' +
            'La forme du calcul est : calcul1A + statistique1/calcul1B [+ calcul2A + statistique2/Calcul2B]';
    }
    getNiveauRequisToolTip() {
        return 'Niveau que doit avoir la compétence pour que l\'effet puisse être utilisé';
    }
    getAmplitudeToolTip() {
        return 'La puissance du dé à lancer (4 pour définir un dé 4). Le nombre de dés à lancer est à définir dans NombreAmplitude';
    }
    getNombreAmplitudeToolTip() {
        return 'Le nombre de dés à lancer (3 pour lancer 3 dés identiques). La puissance du dé à lancer est à définir dans Amplitude';
    }
    getPourcentageToolTip() {
        return 'Indique si la valeur doit être pris en tant que telle ou en tant que pourcentage à appliquer';
    }
    getStatistiqueToolTip() {
        return 'Force / Agilité / Intelligence / Vitalité / Ressource sont les caractétitiques du personnage.<br/>' +
            'Niveau correspond au niveau de la comptétence.';
    }
    whatStatistique1Selected(ressource) {
        if (this.statistique1 !== undefined && this.statistique1 !== null) {
            return this.statistique1.toLowerCase().replace('é', 'e') === ressource.toLowerCase().replace('é', 'e');
        }
        else {
            return false;
        }
    }
    noStatistique1Selected() {
        return this.statistique1 === undefined || this.statistique2 === null;
    }
    whatStatistique2Selected(ressource) {
        if (this.statistique2 !== undefined && this.statistique2 !== null) {
            return this.statistique2.toLowerCase().replace('é', 'e') === ressource.toLowerCase().replace('é', 'e');
        }
        else {
            return false;
        }
    }
    noStatistique2Selected() {
        return this.statistique2 === undefined || this.statistique2 === null;
    }
    setValidateButtonText() {
        const button = document.getElementById('submissionEffectButton');
        if (+this.idCompetenceEffect === -1) {
            this.validationText = 'Ajouter l\'effet';
            button.className.replace('btn-danger', 'btn-warning');
            button.classList.remove('btn-danger');
            button.classList.add('btn-warning');
            button.style.width = '123px';
        }
        else {
            this.validationText = 'Valider les modifications';
            button.className.replace('btn-warning', 'btn-danger');
            button.classList.remove('btn-warning');
            button.classList.add('btn-danger');
            button.style.width = '198px';
        }
    }
};
EffectAddCompetenceEffectComponent.ctorParameters = () => [
    { type: _angular_common_http__WEBPACK_IMPORTED_MODULE_4__["HttpClient"] },
    { type: _angular_router__WEBPACK_IMPORTED_MODULE_5__["ActivatedRoute"] },
    { type: _service_statistiques_service__WEBPACK_IMPORTED_MODULE_6__["StatistiquesService"] },
    { type: _service_effect_add_competence_effect_service__WEBPACK_IMPORTED_MODULE_8__["EffectAddCompetenceEffectService"] }
];
EffectAddCompetenceEffectComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-effect-add-competence-effect',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!./effect-add-competence-effect.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/addCompetenceEffect/effect-add-competence-effect/effect-add-competence-effect.component.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./effect-add-competence-effect.component.scss */ "./src/app/addCompetenceEffect/effect-add-competence-effect/effect-add-competence-effect.component.scss")).default]
    })
], EffectAddCompetenceEffectComponent);



/***/ }),

/***/ "./src/app/addCompetenceEffect/personnage-add-competence-effect/personnage-add-competence-effect.component.scss":
/*!**********************************************************************************************************************!*\
  !*** ./src/app/addCompetenceEffect/personnage-add-competence-effect/personnage-add-competence-effect.component.scss ***!
  \**********************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".personnageCaracteristiques {\n  padding-top: 25px;\n  height: 75px;\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvYWRkQ29tcGV0ZW5jZUVmZmVjdC9wZXJzb25uYWdlLWFkZC1jb21wZXRlbmNlLWVmZmVjdC9wZXJzb25uYWdlLWFkZC1jb21wZXRlbmNlLWVmZmVjdC5jb21wb25lbnQuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUNFLGlCQUFBO0VBQ0EsWUFBQTtBQUNGIiwiZmlsZSI6InNyYy9hcHAvYWRkQ29tcGV0ZW5jZUVmZmVjdC9wZXJzb25uYWdlLWFkZC1jb21wZXRlbmNlLWVmZmVjdC9wZXJzb25uYWdlLWFkZC1jb21wZXRlbmNlLWVmZmVjdC5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIi5wZXJzb25uYWdlQ2FyYWN0ZXJpc3RpcXVlcyB7XHJcbiAgcGFkZGluZy10b3AgOiAyNXB4O1xyXG4gIGhlaWdodCA6IDc1cHg7XHJcbn1cclxuIl19 */");

/***/ }),

/***/ "./src/app/addCompetenceEffect/personnage-add-competence-effect/personnage-add-competence-effect.component.ts":
/*!********************************************************************************************************************!*\
  !*** ./src/app/addCompetenceEffect/personnage-add-competence-effect/personnage-add-competence-effect.component.ts ***!
  \********************************************************************************************************************/
/*! exports provided: PersonnageAddCompetenceEffectComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "PersonnageAddCompetenceEffectComponent", function() { return PersonnageAddCompetenceEffectComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _combat_session_personnage_statistiques__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../combat-session/personnage/statistiques */ "./src/app/combat-session/personnage/statistiques.ts");
/* harmony import */ var _service_statistiques_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../service/statistiques.service */ "./src/app/service/statistiques.service.ts");
/* harmony import */ var _service_rest_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../service/rest.service */ "./src/app/service/rest.service.ts");
/* harmony import */ var _competence_add_competence_effect_competence_add_competence_effect_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../competence-add-competence-effect/competence-add-competence-effect.component */ "./src/app/addCompetenceEffect/competence-add-competence-effect/competence-add-competence-effect.component.ts");
/* harmony import */ var rxjs_operators__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! rxjs/operators */ "./node_modules/rxjs/_esm2015/operators/index.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm2015/http.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _service_effect_add_competence_effect_service__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../../service/effect-add-competence-effect.service */ "./src/app/service/effect-add-competence-effect.service.ts");
/* harmony import */ var _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! @ng-bootstrap/ng-bootstrap */ "./node_modules/@ng-bootstrap/ng-bootstrap/fesm2015/ng-bootstrap.js");











let PersonnageAddCompetenceEffectComponent = class PersonnageAddCompetenceEffectComponent {
    constructor(statistiquesService, effectAddCompetenceEffectService, http, route, modalService) {
        this.statistiquesService = statistiquesService;
        this.effectAddCompetenceEffectService = effectAddCompetenceEffectService;
        this.http = http;
        this.route = route;
        this.modalService = modalService;
        this.competenceList = [];
        this.route.params.subscribe(params => {
            this.idPersonnage = params['idPersonnage'];
            if (this.idPersonnage !== undefined) {
                this.init();
                this.effectAddCompetenceEffectService.personnageAddEffectCompetenceComponent = this;
            }
        });
    }
    ngOnInit() {
    }
    init() {
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_4__["BASE_URL"] + '/Classes/version_mobile/REST/personnageRest.php?id=' + this.idPersonnage;
        const personnageAddCompetenceEffectComponentObservable = this.http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_6__["map"])((item) => this.adaptFromInside(item)));
        const personnageAddCompetenceEffectComponentSuscription = personnageAddCompetenceEffectComponentObservable.subscribe((value) => {
            personnageAddCompetenceEffectComponentSuscription.unsubscribe();
        }, (error) => {
            console.log('Une erreur est survenue dans la suscription: ' + error);
        }, () => {
        });
    }
    adaptFromInside(item) {
        this.idPersonnage = item.Id_Personnage;
        this.libelle = item.Libellé;
        this.niveau = item.Niveau;
        this.pa = item.PA;
        this.pm = item.PM;
        this.force = item.Force;
        this.agilite = item.Agilite;
        this.intelligence = item.Intelligence;
        this.vitalite = item.Vitalite;
        this.pdvActuel = item.PDV_Actuel;
        this.bouclier = item.Bouclier;
        this.ressource = item.Ressource;
        this.typeRessource = item.Type_Ressource;
        this.icon = '../../assets/' + item.Libellé + '/Icon.png';
        this.bonusForce = item.BonusForce;
        this.bonusAgilite = item.BonusAgilite;
        this.bonusIntelligence = item.BonusIntelligence;
        this.bonusVitalite = item.BonusVitalite;
        this.bonusRessource = item.BonusRessource;
        this.bonusArmure = item.BonusArmure;
        this.bonusReussite = item.BonusReussite;
        this.statistiques = new _combat_session_personnage_statistiques__WEBPACK_IMPORTED_MODULE_2__["Statistiques"](+this.idPersonnage, +0, +this.intelligence, +this.bonusIntelligence, +this.force, +this.bonusForce, +this.agilite, +this.bonusAgilite, +this.vitalite, +this.bonusVitalite, +this.ressource, +this.bonusRessource, +this.bonusArmure, +this.bonusArmure);
        this.statistiques.bonusCombat = null;
        this.statistiquesService.setStatistique(this.statistiques);
        return this;
    }
    getCompetences() {
        this.competenceList = [];
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_4__["BASE_URL"] + '/Classes/version_mobile/REST/competencesAddCompetenceEffectRest.php?id=' + this.idPersonnage;
        const competenceAddCompetenceEffectComponentObservable = this.http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_6__["map"])((data) => data.map(item => item)));
        const competenceAddCompetenceEffectComponentSuscription = competenceAddCompetenceEffectComponentObservable.subscribe((value) => {
            for (const val of value) {
                const newCompetence = new _competence_add_competence_effect_competence_add_competence_effect_component__WEBPACK_IMPORTED_MODULE_5__["CompetenceAddCompetenceEffectComponent"](this.http, this.route, this.statistiquesService, this.effectAddCompetenceEffectService, this.modalService);
                newCompetence.adaptFromInside(val);
                if (+newCompetence.idCompetence !== 0) {
                    console.log(newCompetence.idCompetence);
                    this.competenceList.push(newCompetence);
                }
            }
            // this.competenceList = value;
            competenceAddCompetenceEffectComponentSuscription.unsubscribe();
        }, (error) => {
            console.log('Une erreur est survenue dans la suscription: ' + error);
        }, () => {
        });
        return this.competenceList;
    }
};
PersonnageAddCompetenceEffectComponent.ctorParameters = () => [
    { type: _service_statistiques_service__WEBPACK_IMPORTED_MODULE_3__["StatistiquesService"] },
    { type: _service_effect_add_competence_effect_service__WEBPACK_IMPORTED_MODULE_9__["EffectAddCompetenceEffectService"] },
    { type: _angular_common_http__WEBPACK_IMPORTED_MODULE_7__["HttpClient"] },
    { type: _angular_router__WEBPACK_IMPORTED_MODULE_8__["ActivatedRoute"] },
    { type: _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_10__["NgbModal"] }
];
PersonnageAddCompetenceEffectComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-personnage-add-competence-effect',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!./personnage-add-competence-effect.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/addCompetenceEffect/personnage-add-competence-effect/personnage-add-competence-effect.component.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./personnage-add-competence-effect.component.scss */ "./src/app/addCompetenceEffect/personnage-add-competence-effect/personnage-add-competence-effect.component.scss")).default]
    })
], PersonnageAddCompetenceEffectComponent);



/***/ }),

/***/ "./src/app/app-routing.module.ts":
/*!***************************************!*\
  !*** ./src/app/app-routing.module.ts ***!
  \***************************************/
/*! exports provided: routes, AppRoutingModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "routes", function() { return routes; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppRoutingModule", function() { return AppRoutingModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _combat_session_choix_personnage_choix_personnage_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./combat-session/choix-personnage/choix-personnage.component */ "./src/app/combat-session/choix-personnage/choix-personnage.component.ts");




const routes = [
    { path: 'choixPersonnages', component: _combat_session_choix_personnage_choix_personnage_component__WEBPACK_IMPORTED_MODULE_3__["ChoixPersonnageComponent"] },
    { path: 'choixPersonnages', loadChildren: () => Promise.resolve(/*! import() */).then(__webpack_require__.bind(null, /*! ./combat-session/combat-session.module */ "./src/app/combat-session/combat-session.module.ts")).then(m => m.CombatSessionModule) },
    { path: '', redirectTo: 'choixPersonnages', pathMatch: 'full' }
];
let AppRoutingModule = class AppRoutingModule {
};
AppRoutingModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"].forRoot(routes)],
        exports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"]]
    })
], AppRoutingModule);



/***/ }),

/***/ "./src/app/app.component.scss":
/*!************************************!*\
  !*** ./src/app/app.component.scss ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL2FwcC5jb21wb25lbnQuc2NzcyJ9 */");

/***/ }),

/***/ "./src/app/app.component.ts":
/*!**********************************!*\
  !*** ./src/app/app.component.ts ***!
  \**********************************/
/*! exports provided: AppComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppComponent", function() { return AppComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let AppComponent = class AppComponent {
    constructor() { }
    ngOnInit() { }
};
AppComponent.ctorParameters = () => [];
AppComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-root',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!./app.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/app.component.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./app.component.scss */ "./src/app/app.component.scss")).default]
    })
], AppComponent);



/***/ }),

/***/ "./src/app/app.module.ts":
/*!*******************************!*\
  !*** ./src/app/app.module.ts ***!
  \*******************************/
/*! exports provided: AppModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppModule", function() { return AppModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm2015/platform-browser.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _app_routing_module__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./app-routing.module */ "./src/app/app-routing.module.ts");
/* harmony import */ var _app_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./app.component */ "./src/app/app.component.ts");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm2015/http.js");
/* harmony import */ var _ad_directive__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./ad.directive */ "./src/app/ad.directive.ts");
/* harmony import */ var _menu_menu_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./menu/menu.component */ "./src/app/menu/menu.component.ts");
/* harmony import */ var _modal__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./_modal */ "./src/app/_modal/index.ts");
/* harmony import */ var _combat_session_combat_session_module__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./combat-session/combat-session.module */ "./src/app/combat-session/combat-session.module.ts");
/* harmony import */ var _combat_session_combat_session_routing_module__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./combat-session/combat-session-routing.module */ "./src/app/combat-session/combat-session-routing.module.ts");
/* harmony import */ var _combat_session_personnage_icon_personnage_icon_component__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./combat-session/personnage-icon/personnage-icon.component */ "./src/app/combat-session/personnage-icon/personnage-icon.component.ts");
/* harmony import */ var _addCompetenceEffect_add_competence_effect_add_competence_effect_routing_module__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./addCompetenceEffect/add-competence-effect/add-competence-effect-routing.module */ "./src/app/addCompetenceEffect/add-competence-effect/add-competence-effect-routing.module.ts");
/* harmony import */ var _addCompetenceEffect_add_competence_effect_add_competence_effect_module__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./addCompetenceEffect/add-competence-effect/add-competence-effect.module */ "./src/app/addCompetenceEffect/add-competence-effect/add-competence-effect.module.ts");
/* harmony import */ var _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! @ng-bootstrap/ng-bootstrap */ "./node_modules/@ng-bootstrap/ng-bootstrap/fesm2015/ng-bootstrap.js");
/* harmony import */ var angular_font_awesome__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! angular-font-awesome */ "./node_modules/angular-font-awesome/dist/angular-font-awesome.js");
/* harmony import */ var _fortawesome_angular_fontawesome__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! @fortawesome/angular-fontawesome */ "./node_modules/@fortawesome/angular-fontawesome/fesm2015/angular-fontawesome.js");

















let AppModule = class AppModule {
};
AppModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_2__["NgModule"])({
        declarations: [
            _app_component__WEBPACK_IMPORTED_MODULE_4__["AppComponent"],
            _ad_directive__WEBPACK_IMPORTED_MODULE_6__["AdDirective"],
            _menu_menu_component__WEBPACK_IMPORTED_MODULE_7__["MenuComponent"],
            _combat_session_personnage_icon_personnage_icon_component__WEBPACK_IMPORTED_MODULE_11__["PersonnageIconComponent"],
        ],
        imports: [
            _angular_platform_browser__WEBPACK_IMPORTED_MODULE_1__["BrowserModule"],
            _app_routing_module__WEBPACK_IMPORTED_MODULE_3__["AppRoutingModule"],
            _angular_common_http__WEBPACK_IMPORTED_MODULE_5__["HttpClientModule"],
            _combat_session_combat_session_module__WEBPACK_IMPORTED_MODULE_9__["CombatSessionModule"],
            _combat_session_combat_session_routing_module__WEBPACK_IMPORTED_MODULE_10__["CombatSessionRoutingModule"],
            _addCompetenceEffect_add_competence_effect_add_competence_effect_module__WEBPACK_IMPORTED_MODULE_13__["AddCompetenceEffectModule"],
            _addCompetenceEffect_add_competence_effect_add_competence_effect_routing_module__WEBPACK_IMPORTED_MODULE_12__["AddCompetenceEffectRoutingModule"],
            _modal__WEBPACK_IMPORTED_MODULE_8__["ModalModule"],
            _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_14__["NgbModule"],
            angular_font_awesome__WEBPACK_IMPORTED_MODULE_15__["AngularFontAwesomeModule"],
            _fortawesome_angular_fontawesome__WEBPACK_IMPORTED_MODULE_16__["FontAwesomeModule"],
        ],
        providers: [],
        bootstrap: [_app_component__WEBPACK_IMPORTED_MODULE_4__["AppComponent"]],
        entryComponents: []
    })
], AppModule);



/***/ }),

/***/ "./src/app/combat-session/choix-personnage/choix-personnage.component.scss":
/*!*********************************************************************************!*\
  !*** ./src/app/combat-session/choix-personnage/choix-personnage.component.scss ***!
  \*********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".totale {\n  width: 100%;\n  display: flex;\n  flex-wrap: wrap;\n  padding: 0;\n  margin: 0;\n  height: 100vh;\n  /* para Chrome */\n  /* para Firefox */\n  height: calc(100vh - 26px);\n  /* para suporte nativo */\n}\n\n.totale div {\n  flex-basis: 50%;\n  height: 50%;\n}\n\n.totale img {\n  width: 100%;\n  height: 100%;\n}\n\n.totale:hover div:not(:hover) img {\n  -webkit-filter: grayscale(1) blur(1.5px);\n  z-index: 1;\n}\n\n.totale div img {\n  transition: 0.3s ease-in-out;\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvY29tYmF0LXNlc3Npb24vY2hvaXgtcGVyc29ubmFnZS9jaG9peC1wZXJzb25uYWdlLmNvbXBvbmVudC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUVBO0VBQ0UsV0FBQTtFQUNBLGFBQUE7RUFDQSxlQUFBO0VBQ0EsVUFBQTtFQUNBLFNBQUE7RUFDQSxhQUFBO0VBQ3FDLGdCQUFBO0VBQ0EsaUJBQUE7RUFDckMsMEJBQUE7RUFBcUMsd0JBQUE7QUFFdkM7O0FBQUE7RUFDRSxlQUFBO0VBQ0EsV0FBQTtBQUdGOztBQUFBO0VBQ0UsV0FBQTtFQUNBLFlBQUE7QUFHRjs7QUFBQTtFQUNFLHdDQUFBO0VBQ0EsVUFBQTtBQUdGOztBQURBO0VBRUUsNEJBQUE7QUFJRiIsImZpbGUiOiJzcmMvYXBwL2NvbWJhdC1zZXNzaW9uL2Nob2l4LXBlcnNvbm5hZ2UvY2hvaXgtcGVyc29ubmFnZS5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIi8vIERpdmlzZXIgbCfDqWNyYW4gZW4gNCBhdmVjIFwiaGVpZ2h0IDogXCIgPT4gaHR0cHM6Ly9sYS1jYXNjYWRlLmlvL3BvdXJxdW9pLWhlaWdodC0xMDAtbmUtbWFyY2hlLXBhcy9cclxuXHJcbi50b3RhbGUge1xyXG4gIHdpZHRoOiAxMDAlO1xyXG4gIGRpc3BsYXk6IGZsZXg7XHJcbiAgZmxleC13cmFwOiB3cmFwO1xyXG4gIHBhZGRpbmcgOiAwO1xyXG4gIG1hcmdpbiA6IDA7XHJcbiAgaGVpZ2h0OiAxMDB2aDtcclxuICBoZWlnaHQ6IC13ZWJraXQtY2FsYygxMDB2aCAtIDI2cHgpOyAgLyogcGFyYSBDaHJvbWUgKi9cclxuICBoZWlnaHQ6IC1tb3otY2FsYygxMDB2aCAtIDI2cHgpOyAgICAgLyogcGFyYSBGaXJlZm94ICovXHJcbiAgaGVpZ2h0OiBjYWxjKDEwMHZoIC0gMjZweCk7ICAgICAgICAgIC8qIHBhcmEgc3Vwb3J0ZSBuYXRpdm8gKi9cclxufVxyXG4udG90YWxlIGRpdiB7XHJcbiAgZmxleC1iYXNpczogNTAlO1xyXG4gIGhlaWdodDogNTAlO1xyXG59XHJcblxyXG4udG90YWxlIGltZyB7XHJcbiAgd2lkdGg6IDEwMCU7XHJcbiAgaGVpZ2h0OiAxMDAlO1xyXG59XHJcblxyXG4udG90YWxlOmhvdmVyIGRpdjpub3QoOmhvdmVyKSBpbWd7XHJcbiAgLXdlYmtpdC1maWx0ZXI6IGdyYXlzY2FsZSgxKSBibHVyKDEuNXB4KTtcclxuICB6LWluZGV4IDogMTtcclxufVxyXG4udG90YWxlIGRpdiBpbWcge1xyXG4gIC13ZWJraXQtdHJhbnNpdGlvbjogLjNzIGVhc2UtaW4tb3V0O1xyXG4gIHRyYW5zaXRpb246IC4zcyBlYXNlLWluLW91dDtcclxufVxyXG5cclxuIl19 */");

/***/ }),

/***/ "./src/app/combat-session/choix-personnage/choix-personnage.component.ts":
/*!*******************************************************************************!*\
  !*** ./src/app/combat-session/choix-personnage/choix-personnage.component.ts ***!
  \*******************************************************************************/
/*! exports provided: ChoixPersonnageComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ChoixPersonnageComponent", function() { return ChoixPersonnageComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let ChoixPersonnageComponent = class ChoixPersonnageComponent {
    constructor() { }
    ngOnInit() {
    }
};
ChoixPersonnageComponent.ctorParameters = () => [];
ChoixPersonnageComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-choix-personnage',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!./choix-personnage.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/choix-personnage/choix-personnage.component.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./choix-personnage.component.scss */ "./src/app/combat-session/choix-personnage/choix-personnage.component.scss")).default]
    })
], ChoixPersonnageComponent);



/***/ }),

/***/ "./src/app/combat-session/combat-session-routing.module.ts":
/*!*****************************************************************!*\
  !*** ./src/app/combat-session/combat-session-routing.module.ts ***!
  \*****************************************************************/
/*! exports provided: CombatSessionRoutingModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "CombatSessionRoutingModule", function() { return CombatSessionRoutingModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _competences_jet_de_lave_jet_de_lave_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./competences/jet-de-lave/jet-de-lave.component */ "./src/app/combat-session/competences/jet-de-lave/jet-de-lave.component.ts");
/* harmony import */ var _combatSession_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./combatSession.component */ "./src/app/combat-session/combatSession.component.ts");
/* harmony import */ var _competences_canalisation_canalisation_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./competences/canalisation/canalisation.component */ "./src/app/combat-session/competences/canalisation/canalisation.component.ts");
/* harmony import */ var _competences_boule_de_lave_boule_de_lave_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./competences/boule-de-lave/boule-de-lave.component */ "./src/app/combat-session/competences/boule-de-lave/boule-de-lave.component.ts");
/* harmony import */ var _competences_javelot_de_lave_javelot_de_lave_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./competences/javelot-de-lave/javelot-de-lave.component */ "./src/app/combat-session/competences/javelot-de-lave/javelot-de-lave.component.ts");








const routes = [
    {
        path: 'personnage/:id', component: _combatSession_component__WEBPACK_IMPORTED_MODULE_4__["CombatSessionComponent"],
        children: [
            { path: '175', component: _competences_jet_de_lave_jet_de_lave_component__WEBPACK_IMPORTED_MODULE_3__["JetDeLaveComponent"], outlet: 'Competence' },
            { path: '185', component: _competences_canalisation_canalisation_component__WEBPACK_IMPORTED_MODULE_5__["CanalisationComponent"], outlet: 'Competence' },
            { path: '176', component: _competences_boule_de_lave_boule_de_lave_component__WEBPACK_IMPORTED_MODULE_6__["BouleDeLaveComponent"], outlet: 'Competence' },
            { path: '177', component: _competences_javelot_de_lave_javelot_de_lave_component__WEBPACK_IMPORTED_MODULE_7__["JavelotDeLaveComponent"], outlet: 'Competence' }
        ]
    },
];
let CombatSessionRoutingModule = class CombatSessionRoutingModule {
};
CombatSessionRoutingModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"].forChild(routes)],
        exports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"]]
    })
], CombatSessionRoutingModule);



/***/ }),

/***/ "./src/app/combat-session/combat-session.module.ts":
/*!*********************************************************!*\
  !*** ./src/app/combat-session/combat-session.module.ts ***!
  \*********************************************************/
/*! exports provided: CombatSessionModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "CombatSessionModule", function() { return CombatSessionModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm2015/common.js");
/* harmony import */ var _combat_session_routing_module__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./combat-session-routing.module */ "./src/app/combat-session/combat-session-routing.module.ts");
/* harmony import */ var _combatSession_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./combatSession.component */ "./src/app/combat-session/combatSession.component.ts");
/* harmony import */ var _personnage_personnage_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./personnage/personnage.component */ "./src/app/combat-session/personnage/personnage.component.ts");
/* harmony import */ var _competence_competence_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./competence/competence.component */ "./src/app/combat-session/competence/competence.component.ts");
/* harmony import */ var _choix_personnage_choix_personnage_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./choix-personnage/choix-personnage.component */ "./src/app/combat-session/choix-personnage/choix-personnage.component.ts");
/* harmony import */ var _modal__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../_modal */ "./src/app/_modal/index.ts");
/* harmony import */ var _competences_jet_de_lave_jet_de_lave_component__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./competences/jet-de-lave/jet-de-lave.component */ "./src/app/combat-session/competences/jet-de-lave/jet-de-lave.component.ts");
/* harmony import */ var _competences_canalisation_canalisation_component__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./competences/canalisation/canalisation.component */ "./src/app/combat-session/competences/canalisation/canalisation.component.ts");
/* harmony import */ var _competences_boule_de_lave_boule_de_lave_component__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./competences/boule-de-lave/boule-de-lave.component */ "./src/app/combat-session/competences/boule-de-lave/boule-de-lave.component.ts");
/* harmony import */ var _competences_javelot_de_lave_javelot_de_lave_component__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./competences/javelot-de-lave/javelot-de-lave.component */ "./src/app/combat-session/competences/javelot-de-lave/javelot-de-lave.component.ts");
/* harmony import */ var _service_statistiques_service__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ../service/statistiques.service */ "./src/app/service/statistiques.service.ts");
/* harmony import */ var _competence_icon_competence_icon_component__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ./competence-icon/competence-icon.component */ "./src/app/combat-session/competence-icon/competence-icon.component.ts");
/* harmony import */ var _competence_effect_competence_effect_component__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ./competence-effect/competence-effect.component */ "./src/app/combat-session/competence-effect/competence-effect.component.ts");
/* harmony import */ var _new_competence_new_competence_component__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./new-competence/new-competence.component */ "./src/app/combat-session/new-competence/new-competence.component.ts");

















let CombatSessionModule = class CombatSessionModule {
};
CombatSessionModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        declarations: [
            _combatSession_component__WEBPACK_IMPORTED_MODULE_4__["CombatSessionComponent"],
            _personnage_personnage_component__WEBPACK_IMPORTED_MODULE_5__["PersonnageComponent"],
            _competence_competence_component__WEBPACK_IMPORTED_MODULE_6__["CompetenceComponent"],
            _competence_icon_competence_icon_component__WEBPACK_IMPORTED_MODULE_14__["CompetenceIconComponent"],
            _choix_personnage_choix_personnage_component__WEBPACK_IMPORTED_MODULE_7__["ChoixPersonnageComponent"],
            _combatSession_component__WEBPACK_IMPORTED_MODULE_4__["CombatSessionComponent"],
            _competences_jet_de_lave_jet_de_lave_component__WEBPACK_IMPORTED_MODULE_9__["JetDeLaveComponent"],
            _competences_canalisation_canalisation_component__WEBPACK_IMPORTED_MODULE_10__["CanalisationComponent"],
            _competences_boule_de_lave_boule_de_lave_component__WEBPACK_IMPORTED_MODULE_11__["BouleDeLaveComponent"],
            _competences_javelot_de_lave_javelot_de_lave_component__WEBPACK_IMPORTED_MODULE_12__["JavelotDeLaveComponent"],
            _competence_effect_competence_effect_component__WEBPACK_IMPORTED_MODULE_15__["CompetenceEffectComponent"],
            _new_competence_new_competence_component__WEBPACK_IMPORTED_MODULE_16__["NewCompetenceComponent"],
        ],
        imports: [
            _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"],
            _combat_session_routing_module__WEBPACK_IMPORTED_MODULE_3__["CombatSessionRoutingModule"],
            _modal__WEBPACK_IMPORTED_MODULE_8__["ModalModule"],
        ],
        providers: [
            _service_statistiques_service__WEBPACK_IMPORTED_MODULE_13__["StatistiquesService"],
        ],
    })
], CombatSessionModule);



/***/ }),

/***/ "./src/app/combat-session/combatSession.component.scss":
/*!*************************************************************!*\
  !*** ./src/app/combat-session/combatSession.component.scss ***!
  \*************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL2NvbWJhdC1zZXNzaW9uL2NvbWJhdFNlc3Npb24uY29tcG9uZW50LnNjc3MifQ== */");

/***/ }),

/***/ "./src/app/combat-session/combatSession.component.ts":
/*!***********************************************************!*\
  !*** ./src/app/combat-session/combatSession.component.ts ***!
  \***********************************************************/
/*! exports provided: CombatSessionComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "CombatSessionComponent", function() { return CombatSessionComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm2015/http.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");




let CombatSessionComponent = class CombatSessionComponent {
    constructor(http, route) {
        this.http = http;
        this.route = route;
    }
    ngOnInit() {
        this.actualCharacterID = +this.route.snapshot.params.id;
    }
};
CombatSessionComponent.ctorParameters = () => [
    { type: _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpClient"] },
    { type: _angular_router__WEBPACK_IMPORTED_MODULE_3__["ActivatedRoute"] }
];
CombatSessionComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-combat-session',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!./combatSession.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/combatSession.component.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./combatSession.component.scss */ "./src/app/combat-session/combatSession.component.scss")).default]
    })
], CombatSessionComponent);



/***/ }),

/***/ "./src/app/combat-session/competence-effect/competence-effect.component.scss":
/*!***********************************************************************************!*\
  !*** ./src/app/combat-session/competence-effect/competence-effect.component.scss ***!
  \***********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL2NvbWJhdC1zZXNzaW9uL2NvbXBldGVuY2UtZWZmZWN0L2NvbXBldGVuY2UtZWZmZWN0LmNvbXBvbmVudC5zY3NzIn0= */");

/***/ }),

/***/ "./src/app/combat-session/competence-effect/competence-effect.component.ts":
/*!*********************************************************************************!*\
  !*** ./src/app/combat-session/competence-effect/competence-effect.component.ts ***!
  \*********************************************************************************/
/*! exports provided: CompetenceEffectComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "CompetenceEffectComponent", function() { return CompetenceEffectComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm2015/http.js");
/* harmony import */ var _modal__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../_modal */ "./src/app/_modal/index.ts");
/* harmony import */ var _service_statistiques_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../service/statistiques.service */ "./src/app/service/statistiques.service.ts");
/* harmony import */ var _service_entities_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../service/entities.service */ "./src/app/service/entities.service.ts");
/* harmony import */ var _service_rest_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../service/rest.service */ "./src/app/service/rest.service.ts");
/* harmony import */ var rxjs_operators__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! rxjs/operators */ "./node_modules/rxjs/_esm2015/operators/index.js");








let CompetenceEffectComponent = class CompetenceEffectComponent {
    constructor(http, renderer, modalService, statistiqueService, entitiesService) {
        this.http = http;
        this.renderer = renderer;
        this.modalService = modalService;
        this.statistiqueService = statistiqueService;
        this.entitiesService = entitiesService;
        this.clickedCharacters = [];
    }
    ngOnInit() {
    }
    loadItSelf() {
        // console.log(this.Id_Competence);
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_6__["BASE_URL"] + '// TODO if necessary' + this.idCompetenceEffect;
        const competenceObservable = this.http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_7__["map"])((item) => this.adaptFromInside(item)));
        const competenceSuscription = competenceObservable.subscribe(() => {
            competenceSuscription.unsubscribe();
        }, (error) => {
            console.log('Une erreur est survenue dans la suscription de la competence: ' + error);
        }, () => {
        });
    }
    adaptFromInside(item) {
        this.idCompetenceEffect = item.idCompetenceEffect;
        this.idCompetence = item.idCompetence;
        this.effectOrder = item.effectOrder;
        this.actionType = item.actionType;
        this.effectType = item.effectType;
        this.applicationType = item.applicationType;
        this.niveau = item.niveau;
        this.niveauRequis = item.niveauRequis;
        this.descriptionBefore = item.descriptionBefore;
        this.descriptionAfter = item.descriptionAfter;
        this.typeCalcul = item.typeCalcul;
        this.calcul1A = item.calcul1A;
        this.calcul1B = item.calcul1B;
        this.calcul2A = item.calcul2A;
        this.calcul2B = item.calcul2B;
        this.amplitude = item.amplitude;
        this.nombreAmplitude = item.nombreAmplitude;
        this.statistique1 = item.statistique1;
        this.statistique2 = item.statistique2;
        this.impact = item.impact;
        this.pourcentage = item.pourcentage;
        this.numberOfUse = item.numberOfUse;
        this.numberOfTurn = item.numberOfTurn;
        this.numberOfFight = item.numberOfFight;
        this.numberOfTarget = item.numberOfTarget;
        this.accumulationType = item.accumulationType;
        this.numberOfAccumulation = item.numberOfAccumulation;
        this.successiveAccumulation = item.successiveAccumulation;
        this.linkedEffect = item.linkedEffect;
    }
    /*
      canBeUsed(actuallyClicked: number, previouslyClickedCharacters: Targets[], competence: NewCompetenceComponent): boolean {
        if (+this.applicationType < 7) {
          return true;
        } else if (+this.applicationType === 7 || +this.applicationType === 13 || +this.applicationType === 19) {
          // Cas des différents "après accumulation".
          const previousUses = competence.getPreviousCompetenceUses();
          return this.accumulativeUse(previousUses);
        } else if (+this.applicationType === 8 || +this.applicationType === 14) {
          // Cas des différents "après accumulation sur cible unique".
          const previousUses = competence.getPreviousCompetenceUses();
          return this.accumulativeUse(previousUses) && this.uniqueTarget(previousUses, competence.actuallyClicked);
        } else if (+this.applicationType === 9 || +this.applicationType === 15 || +this.applicationType === 20) {
          // Cas des différents "après accumulation sur cible distinctes".
          const previousUses = competence.getPreviousCompetenceUses();
          return this.accumulativeUse(previousUses) && this.distinctTargets(previousUses, competence.actuallyClicked);
        } else if (+this.applicationType === 10 || +this.applicationType === 16 || +this.applicationType === 21) {
          // Cas des différents "après accumulation successives".
          const previousUses = competence.getPreviousCharacterUses();
          return this.successiveUses(previousUses);
        } else if (+this.applicationType === 11 || +this.applicationType === 17) {
          // Cas des différents "après accumulation successives sur cibles uniques".
          const previousUses = competence.getPreviousCharacterUses();
          return this.successiveUses(previousUses) && this.uniqueTarget(previousUses, competence.actuallyClicked);
        } else if (+this.applicationType === 12 || +this.applicationType === 18 || +this.applicationType === 22) {
          // Cas des différents "après accumulation successives sur cibles distinctes".
          const previousUses = competence.getPreviousCharacterUses();
          return this.successiveUses(previousUses) && this.distinctTargets(previousUses, competence.actuallyClicked);
        }
        return null;
      }
    */
    canBeUsed(actuallyClicked, previouslyClickedCharacters, competence) {
        if (this.numberOfAccumulation > 0 && this.accumulationType !== 0) {
            if (this.successiveAccumulation) {
                if (this.accumulationType === 1) {
                    // Cas des différents "après accumulation successives".
                    const previousUses = competence.getPreviousCharacterUses();
                    return this.successiveUses(previousUses);
                }
                else if (this.accumulationType === 2) {
                    // Cas des différents "après accumulation successives sur cibles uniques".
                    const previousUses = competence.getPreviousCharacterUses();
                    return this.successiveUses(previousUses) && this.uniqueTarget(previousUses, competence.actuallyClicked);
                }
                else if (this.accumulationType === 3) {
                    // Cas des différents "après accumulation successives sur cibles distinctes".
                    const previousUses = competence.getPreviousCharacterUses();
                    return this.successiveUses(previousUses) && this.distinctTargets(previousUses, competence.actuallyClicked);
                }
            }
            else {
                if (this.accumulationType === 1) {
                    // Cas des différents "après accumulation".
                    const previousUses = competence.getPreviousCompetenceUses();
                    return this.accumulativeUse(previousUses);
                }
                else if (this.accumulationType === 2) {
                    // Cas des différents "après accumulation sur cible unique".
                    const previousUses = competence.getPreviousCompetenceUses();
                    return this.accumulativeUse(previousUses) && this.uniqueTarget(previousUses, competence.actuallyClicked);
                }
                else if (this.accumulationType === 3) {
                    // Cas des différents "après accumulation sur cible distinctes".
                    const previousUses = competence.getPreviousCompetenceUses();
                    return this.accumulativeUse(previousUses) && this.distinctTargets(previousUses, competence.actuallyClicked);
                }
            }
        }
        else {
            return true;
        }
    }
    /*
       * this.numberOfAccumulation - 1 car quand on précise le nombre d'accumulation nécessaire,
       c'est à ce nombre d'utilisation qui déclenchera l'effet.
       *      => Pour JetDeLave : 3 accumulations pour que l'effet se déclence veut dire que j'ai besoin de l'utiliser 2 fois,
       et à la troisième utilisation, l'effet se déclenche.
       *      => Donc à l'utilisation en cours. Ce qui veut dire, que je n'ai pas besoin de le valider,
       étant donné que je suis dans l'effet de la compétence en question.
       *      => Aurait pu être renomé en quelque chose comme numberOfUseToExec.
       */
    accumulativeUse(previousUses) {
        return previousUses.length === this.numberOfAccumulation - 1;
    }
    successiveUses(previousUses) {
        let index = 0;
        while (+previousUses[index].idCompetence === +this.idCompetence && index < +this.numberOfAccumulation - 1
            && index < previousUses.length) {
            index++;
        }
        if (index !== +this.numberOfAccumulation - 1) {
            return false;
        }
        return true;
    }
    uniqueTarget(previousUses, actualTarget) {
        let index = 0;
        while (+previousUses[index].idReceiver === +actualTarget && index < +this.numberOfAccumulation - 1 && index < +previousUses.length) {
            if (+previousUses[index].idCompetence === +this.idCompetence) {
                index++;
            }
        }
        if (index !== +this.numberOfAccumulation - 1) {
            return false;
        }
        return true;
    }
    distinctTargets(previousUses, actualTarget) {
        let index = 0;
        const arrayTargets = [];
        while (!arrayTargets.includes(+previousUses[index].idReceiver) && index < +this.numberOfAccumulation - 1
            && index < previousUses.length) {
            if (+previousUses[index].idCompetence === +this.idCompetence) {
                index++;
                arrayTargets.push(+previousUses[index].idReceiver);
            }
        }
        if (index !== +this.numberOfAccumulation - 1 && arrayTargets.includes(+actualTarget)) {
            return false;
        }
        return true;
    }
};
CompetenceEffectComponent.ctorParameters = () => [
    { type: _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpClient"] },
    { type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Renderer2"] },
    { type: _modal__WEBPACK_IMPORTED_MODULE_3__["ModalService"] },
    { type: _service_statistiques_service__WEBPACK_IMPORTED_MODULE_4__["StatistiquesService"] },
    { type: _service_entities_service__WEBPACK_IMPORTED_MODULE_5__["EntitiesService"] }
];
CompetenceEffectComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-competence-effect',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!./competence-effect.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/competence-effect/competence-effect.component.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./competence-effect.component.scss */ "./src/app/combat-session/competence-effect/competence-effect.component.scss")).default]
    })
], CompetenceEffectComponent);



/***/ }),

/***/ "./src/app/combat-session/competence-icon/competence-icon.component.scss":
/*!*******************************************************************************!*\
  !*** ./src/app/combat-session/competence-icon/competence-icon.component.scss ***!
  \*******************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL2NvbWJhdC1zZXNzaW9uL2NvbXBldGVuY2UtaWNvbi9jb21wZXRlbmNlLWljb24uY29tcG9uZW50LnNjc3MifQ== */");

/***/ }),

/***/ "./src/app/combat-session/competence-icon/competence-icon.component.ts":
/*!*****************************************************************************!*\
  !*** ./src/app/combat-session/competence-icon/competence-icon.component.ts ***!
  \*****************************************************************************/
/*! exports provided: CompetenceIconComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "CompetenceIconComponent", function() { return CompetenceIconComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm2015/http.js");
/* harmony import */ var rxjs_operators__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! rxjs/operators */ "./node_modules/rxjs/_esm2015/operators/index.js");
/* harmony import */ var _service_rest_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../service/rest.service */ "./src/app/service/rest.service.ts");





let CompetenceIconComponent = class CompetenceIconComponent {
    constructor(http) {
        this.http = http;
    }
    ngOnInit() {
        this.loadItSelf();
    }
    loadItSelf() {
        // console.log(this.Id_Competence);
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_4__["BASE_URL"] + '/Classes/version_mobile/REST/competenceIconAngularRest.php?id='
            + this.Id_Competence;
        const competenceIconObservable = this.http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_3__["map"])((item) => this.adaptFromInside(item)));
        const competenceIconSubsciption = competenceIconObservable.subscribe(() => {
            competenceIconSubsciption.unsubscribe();
        }, (error) => {
            console.log('Une erreur est survenue dans la suscription de la competence: ' + error);
        }, () => {
        });
    }
    adaptFromInside(item) {
        this.Id_Competence = item.Id_Competence;
        this.Libelle = item.Libelle;
        this.Image = item.Image;
        this.Niveau = item.Niveau;
    }
};
CompetenceIconComponent.ctorParameters = () => [
    { type: _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpClient"] }
];
CompetenceIconComponent.propDecorators = {
    Id_Competence: [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"] }]
};
CompetenceIconComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-competence-icon',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!./competence-icon.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/competence-icon/competence-icon.component.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./competence-icon.component.scss */ "./src/app/combat-session/competence-icon/competence-icon.component.scss")).default]
    })
], CompetenceIconComponent);



/***/ }),

/***/ "./src/app/combat-session/competence/competence.component.scss":
/*!*********************************************************************!*\
  !*** ./src/app/combat-session/competence/competence.component.scss ***!
  \*********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".borderedElement {\n  border-top: solid 1px;\n  border-bottom: solid 1px;\n  margin: 10px 0px 10px 0px;\n}\n\n.ally, .ally img {\n  height: 20vh;\n  width: 10vh;\n}\n\n.ally {\n  display: inline-block;\n  margin-right: 5px;\n}\n\n.borderedElement {\n  border-top: solid 1px;\n  border-bottom: solid 1px;\n  padding-bottom: 5px;\n  margin-bottom: 5px;\n}\n\n.borderNormalShot {\n  border: dashed 2px orange;\n}\n\n.borderedExplosion {\n  border: dashed 3px darkred;\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvY29tYmF0LXNlc3Npb24vY29tcGV0ZW5jZS9jb21wZXRlbmNlLmNvbXBvbmVudC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0UscUJBQUE7RUFDQSx3QkFBQTtFQUNBLHlCQUFBO0FBQ0Y7O0FBR0E7RUFDRSxZQUFBO0VBQ0EsV0FBQTtBQUFGOztBQUdBO0VBQ0UscUJBQUE7RUFDQSxpQkFBQTtBQUFGOztBQUdBO0VBQ0UscUJBQUE7RUFDQSx3QkFBQTtFQUNBLG1CQUFBO0VBQ0Esa0JBQUE7QUFBRjs7QUFHQTtFQUNFLHlCQUFBO0FBQUY7O0FBR0E7RUFDRSwwQkFBQTtBQUFGIiwiZmlsZSI6InNyYy9hcHAvY29tYmF0LXNlc3Npb24vY29tcGV0ZW5jZS9jb21wZXRlbmNlLmNvbXBvbmVudC5zY3NzIiwic291cmNlc0NvbnRlbnQiOlsiLmJvcmRlcmVkRWxlbWVudCB7XHJcbiAgYm9yZGVyLXRvcDogc29saWQgMXB4O1xyXG4gIGJvcmRlci1ib3R0b206IHNvbGlkIDFweDtcclxuICBtYXJnaW46IDEwcHggMHB4IDEwcHggMHB4O1xyXG59XHJcblxyXG5cclxuLmFsbHksIC5hbGx5IGltZyB7XHJcbiAgaGVpZ2h0OiAyMHZoO1xyXG4gIHdpZHRoOiAxMHZoO1xyXG59XHJcblxyXG4uYWxseSB7XHJcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xyXG4gIG1hcmdpbi1yaWdodDogNXB4O1xyXG59XHJcblxyXG4uYm9yZGVyZWRFbGVtZW50IHtcclxuICBib3JkZXItdG9wOiBzb2xpZCAxcHg7XHJcbiAgYm9yZGVyLWJvdHRvbTogc29saWQgMXB4O1xyXG4gIHBhZGRpbmctYm90dG9tOiA1cHg7XHJcbiAgbWFyZ2luLWJvdHRvbTogNXB4O1xyXG59XHJcblxyXG4uYm9yZGVyTm9ybWFsU2hvdCB7XHJcbiAgYm9yZGVyOiBkYXNoZWQgMnB4IG9yYW5nZTtcclxufVxyXG5cclxuLmJvcmRlcmVkRXhwbG9zaW9uIHtcclxuICBib3JkZXI6IGRhc2hlZCAzcHggZGFya3JlZDtcclxufVxyXG4iXX0= */");

/***/ }),

/***/ "./src/app/combat-session/competence/competence.component.ts":
/*!*******************************************************************!*\
  !*** ./src/app/combat-session/competence/competence.component.ts ***!
  \*******************************************************************/
/*! exports provided: CompetenceComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "CompetenceComponent", function() { return CompetenceComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm2015/http.js");
/* harmony import */ var rxjs_operators__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! rxjs/operators */ "./node_modules/rxjs/_esm2015/operators/index.js");
/* harmony import */ var _modal__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../_modal */ "./src/app/_modal/index.ts");
/* harmony import */ var _service_statistiques_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../service/statistiques.service */ "./src/app/service/statistiques.service.ts");
/* harmony import */ var _service_rest_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../service/rest.service */ "./src/app/service/rest.service.ts");
/* harmony import */ var _service_entities_service__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../service/entities.service */ "./src/app/service/entities.service.ts");
/* harmony import */ var _competence_effect_competence_effect_component__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../competence-effect/competence-effect.component */ "./src/app/combat-session/competence-effect/competence-effect.component.ts");









let CompetenceComponent = class CompetenceComponent {
    // tslint:disable:variable-name
    constructor(http, renderer, modalService, statistiqueService, entitiesService) {
        this.http = http;
        this.renderer = renderer;
        this.modalService = modalService;
        this.statistiqueService = statistiqueService;
        this.entitiesService = entitiesService;
        this.combatSession = 1;
        this.entities = [];
        this.Effects = [];
        this.Id_Competence = this.getIdCompetence();
        this.setStatistiques(this.statistiqueService.getStatistique());
        this.loadItSelf();
        this.getEntities();
    }
    getIdCompetence() {
        return 0;
    }
    ngOnInit() {
    }
    setStatistiques(statistiques) {
        this.statistiques = statistiques;
    }
    loadItSelf() {
        // console.log(this.Id_Competence);
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_6__["BASE_URL"] + '/Classes/version_mobile/REST/competenceAngularRest.php?id=' + this.Id_Competence;
        const competenceObservable = this.http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_3__["map"])((item) => this.adaptFromInside(item)));
        const competenceSuscription = competenceObservable.subscribe(() => {
            competenceSuscription.unsubscribe();
        }, (error) => {
            console.log('Une erreur est survenue dans la suscription de la competence: ' + error);
        }, () => {
        });
    }
    loadItSelfWithEffect() {
        // console.log(this.Id_Competence);
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_6__["BASE_URL"] + '/Classes/version_mobile/REST/competenceWithEffectsAngularRest.php?id=' + this.Id_Competence;
        const competenceObservable = this.http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_3__["map"])((item) => this.adaptFromInsideWithEffects(item)));
        const competenceSuscription = competenceObservable.subscribe(() => {
            competenceSuscription.unsubscribe();
        }, (error) => {
            console.log('Une erreur est survenue dans la suscription de la competence: ' + error);
        }, () => {
        });
    }
    adaptFromInside(item) {
        this.Id_Competence = item.Id_Competence;
        this.Libelle = item.Libelle;
        this.Image = item.Image;
        this.Niveau = item.Niveau;
        this.Portee = item.Portee;
        this.Cout_En_PA = item.Cout_En_PA;
        this.Cout_En_Ressource = item.Cout_En_Ressource;
        this.Ressource = item.Ressource;
        this.Description1 = item.Description1;
        this.Description2 = item.Description2;
        this.Description3 = item.Description3;
        this.Description4 = item.Description4;
        this.Description5 = item.Description5;
        this.Description6 = item.Description6;
        this.Effet1 = item.Effet1;
        this.Effet1Bis = item.Effet1Bis;
        this.Effet2 = item.Effet2;
        this.Effet2Bis = item.Effet2Bis;
        this.Effet3 = item.Effet3;
        this.Effet3Bis = item.Effet3Bis;
        this.Fin = item.Fin;
        this.Type_calcul1 = item.Type_calcul1;
        this.Calcul1a = item.Calcul1a;
        this.Calcul1b = item.Calcul1b;
        this.Amplitude1 = item.Amplitude1;
        this.Nombre_Amplitude1 = item.Nombre_Amplitude1;
        this.Statistique1 = item.Statistique1;
        this.Impact1 = item.Impact1;
        this.Pourcentage1 = item.Pourcentage1;
        this.Type_calcul2 = item.Type_calcul2;
        this.Calcul2a = item.Calcul2a;
        this.Calcul2b = item.Calcul2b;
        this.Amplitude2 = item.Amplitude2;
        this.Nombre_Amplitude2 = item.Nombre_Amplitude2;
        this.Statistique2 = item.Statistique2;
        this.Impact2 = item.Impact2;
        this.Pourcentage2 = item.Pourcentage2;
        this.Type_calcul3 = item.Type_calcul3;
        this.Calcul3a = item.Calcul3a;
        this.Calcul3b = item.Calcul3b;
        this.Amplitude3 = item.Amplitude3;
        this.Nombre_Amplitude3 = item.Nombre_Amplitude3;
        this.Statistique3 = item.Statistique3;
        this.Impact3 = item.Impact3;
        this.Pourcentage3 = item.Pourcentage3;
        this.Type_calcul4 = item.Type_calcul4;
        this.Calcul4a = item.Calcul4a;
        this.Calcul4b = item.Calcul4b;
        this.Amplitude4 = item.Amplitude4;
        this.Nombre_Amplitude4 = item.Nombre_Amplitude4;
        this.Statistique4 = item.Statistique4;
        this.Impact4 = item.Impact4;
        this.Pourcentage4 = item.Pourcentage4;
        this.Type_calcul5 = item.Type_calcul5;
        this.Calcul5a = item.Calcul5a;
        this.Calcul5b = item.Calcul5b;
        this.Amplitude5 = item.Amplitude5;
        this.Nombre_Amplitude5 = item.Nombre_Amplitude5;
        this.Statistique5 = item.Statistique5;
        this.Impact5 = item.Impact5;
        this.Pourcentage5 = item.Pourcentage5;
        this.NumEffet = item.NumEffet;
        this.Type_calculBis1 = item.Type_calculBis1;
        this.CalculBis1a = item.CalculBis1a;
        this.CalculBis1b = item.CalculBis1b;
        this.StatistiqueBis1 = item.StatistiqueBis1;
        this.Type_calculBis2 = item.Type_calculBis2;
        this.CalculBis2a = item.CalculBis2a;
        this.CalculBis2b = item.CalculBis2b;
        this.StatistiqueBis2 = item.StatistiqueBis2;
        this.ImpactBis = item.ImpactBis;
        this.PourcentageBis = item.PourcentageBis;
        this.Entete = item.Entete;
        this.Exemple = item.Exemple;
        this.Niveau_Requis = item.Niveau_Requis;
        this.Competence_Requise_1 = item.Competence_Requise_1;
        this.Competence_Requise_2 = item.Competence_Requise_2;
        this.Competence_Requise_3 = item.Competence_Requise_3;
        this.TempsRechargement = item.TempsRechargement;
        this.Duree = item.Duree;
        this.Cooldown = item.Cooldown;
        this.Bonus_Temporaire = item.Bonus_Temporaire;
        this.Type_Calcul_Temporaire = item.Type_Calcul_Temporaire;
        this.Valeur_Temporaire1 = item.Valeur_Temporaire1;
        this.Valeur_Temporaire2 = item.Valeur_Temporaire2;
        this.Statistique_Temporaire1 = item.Statistique_Temporaire1;
    }
    adaptFromInsideWithEffects(item) {
        this.Id_Competence = item.Id_Competence;
        this.Libelle = item.Libelle;
        this.Image = item.Image;
        this.Niveau = item.Niveau;
        this.Portee = item.Portee;
        this.Cout_En_PA = item.Cout_En_PA;
        this.Cout_En_Ressource = item.Cout_En_Ressource;
        this.Ressource = item.Ressource;
        this.Description1 = item.Description1;
        this.Fin = item.Fin;
        this.Entete = item.Entete;
        this.Exemple = item.Exemple;
        this.Niveau_Requis = item.Niveau_Requis;
        this.Competence_Requise_1 = item.Competence_Requise_1;
        this.Competence_Requise_2 = item.Competence_Requise_2;
        this.Competence_Requise_3 = item.Competence_Requise_3;
        this.TempsRechargement = item.TempsRechargement;
        this.Duree = item.Duree;
        this.Cooldown = item.Cooldown;
        for (const effect of item.effects) {
            const newEffect = new _competence_effect_competence_effect_component__WEBPACK_IMPORTED_MODULE_8__["CompetenceEffectComponent"](this.http, this.renderer, this.modalService, this.statistiqueService, this.entitiesService);
            // newEffect.idCompetenceEffect = effect.idCompetenceEffect;
            newEffect.adaptFromInside(effect);
            this.Effects.push(newEffect);
        }
    }
    getStatistique(statistique) {
        switch (statistique) {
            case 'intelligence':
                return +this.statistiques.Intelligence + +this.statistiques.BonusIntelligence;
            case 'force':
                return +this.statistiques.Force + +this.statistiques.BonusForce;
            case 'agilite':
                return +this.statistiques.Agilite + +this.statistiques.BonusAgilite;
            case 'ressource':
                return +this.statistiques.Ressource + +this.statistiques.BonusRessource;
            case 'vitalite':
                return +this.statistiques.Vitalite + +this.statistiques.BonusVitalite;
            case 'niveau':
                return +this.Niveau;
        }
    }
    getDescriptionNumber(indice) {
        switch (indice) {
            case 1:
                return this.Description1;
            case 2:
                return this.Description2;
            case 3:
                return this.Description3;
            case 4:
                return this.Description4;
            case 5:
                return this.Description5;
            case 6:
                return this.Description6;
        }
    }
    getValue(indice) {
        switch (indice) {
            case 1:
                return +this.Calcul1a + (Math.floor(+this.getStatistique(this.Statistique1) / +this.Calcul1b));
            case 2:
                return +this.Calcul2a + (Math.floor(+this.getStatistique(this.Statistique2) / +this.Calcul2b));
            case 3:
                return +this.Calcul3a + (Math.floor(+this.getStatistique(this.Statistique3) / +this.Calcul3b));
            case 4:
                return +this.Calcul4a + (Math.floor(+this.getStatistique(this.Statistique4) / +this.Calcul4b));
            case 5:
                return +this.Calcul5a + (Math.floor(+this.getStatistique(this.Statistique5) / +this.Calcul5b));
        }
    }
    getValueWithBonusStatistique(indice, bonusStatsCombat) {
        switch (indice) {
            case 1:
                return +this.Calcul1a + (Math.floor((+this.getStatistique(this.Statistique1) + +bonusStatsCombat) / +this.Calcul1b));
            case 2:
                return +this.Calcul2a + (Math.floor((+this.getStatistique(this.Statistique2) + +bonusStatsCombat) / +this.Calcul2b));
            case 3:
                return +this.Calcul3a + (Math.floor((+this.getStatistique(this.Statistique3) + +bonusStatsCombat) / +this.Calcul3b));
            case 4:
                return +this.Calcul4a + (Math.floor((+this.getStatistique(this.Statistique4) + +bonusStatsCombat) / +this.Calcul4b));
            case 5:
                return +this.Calcul5a + (Math.floor((+this.getStatistique(this.Statistique5) + +bonusStatsCombat) / +this.Calcul5b));
        }
    }
    getEffect(indice) {
        switch (indice) {
            case 1:
                return this.Effet1;
            case 2:
                return this.Effet2;
            case 3:
                return this.Effet3;
        }
    }
    getEffectBis(indice) {
        switch (indice) {
            case 1:
                return this.Effet1Bis;
            case 2:
                return this.Effet2Bis;
            case 3:
                return this.Effet3Bis;
        }
    }
    getValueWithBonusCombat(indice) {
        return null;
    }
    getEffectValue() {
        return +this.CalculBis1a + (Math.floor((+this.getStatistique(this.StatistiqueBis1)) / +this.CalculBis1b));
    }
    getEffectValueWithBonusStatistique(bonusStatsCombat) {
        return +this.CalculBis1a + (Math.floor((+this.getStatistique(this.StatistiqueBis1) + +bonusStatsCombat) / +this.CalculBis1b));
    }
    getEffectValueWithBonusCombat() {
        return null;
    }
    getDescription() {
        let competenceDescription = '';
        let indexDescription = 1;
        competenceDescription += this.getDescriptionNumber(1);
        while (this.getDescriptionNumber(indexDescription + 1) != null) {
            // console.log('indexDescription = ' + indexDescription);
            competenceDescription += ' ' + this.getValueWithBonusCombat(indexDescription) + ' ' + this.getDescriptionNumber(indexDescription + 1);
            indexDescription++;
        }
        if (this.Niveau > 2) {
            competenceDescription += '<br/>' + this.getEffect(1);
            if (this.NumEffet === 1) {
                competenceDescription += ' ' + this.getEffectValueWithBonusCombat() + ' ' + this.getEffectBis(1);
            }
        }
        if (this.Niveau > 5) {
            competenceDescription += '<br/>' + this.getEffect(2);
            if (this.NumEffet === 2) {
                competenceDescription += ' ' + this.getEffectValueWithBonusCombat() + ' ' + this.getEffectBis(2);
            }
        }
        if (this.Niveau > 8) {
            competenceDescription += '<br/>' + this.getEffect(3);
            if (this.NumEffet === 3) {
                competenceDescription += ' ' + this.getEffectValueWithBonusCombat() + ' ' + this.getEffectBis(3);
            }
        }
        return competenceDescription;
    }
    competenceInteraction() {
        this.resetModal();
        this.openModal('useCompetence');
        const modalBody = document.getElementById('modalBody');
        const divAllys = this.createElementWithNameAndBorder('Ally');
        const divEnnemys = this.createElementWithNameAndBorder('Ennemy');
        const divNeutrals = this.createElementWithNameAndBorder('Neutral');
        for (const entity of this.entities) {
            if (+(+entity.team - +this.statistiques.team) === 0) {
                if (!(+entity.Id_Personnage === +this.statistiques.Id_Personnage)) {
                    this.addEntity(entity, divAllys);
                }
            }
            else if (+(+entity.team - +this.statistiques.team) === 1) {
                this.addEntity(entity, divEnnemys);
            }
            else if (+(+entity.team - +this.statistiques.team) === 2) {
                this.addEntity(entity, divNeutrals);
            }
        }
        this.renderer.appendChild(modalBody, divAllys);
        this.renderer.appendChild(modalBody, divEnnemys);
        this.renderer.appendChild(modalBody, divNeutrals);
        let modalClose = document.getElementById('closeCompetenceModal');
        modalClose.parentNode.replaceChild(modalClose.cloneNode(true), modalClose);
        modalClose = document.getElementById('closeCompetenceModal');
        modalClose.addEventListener('click', () => {
            this.closeModal('useCompetence');
        });
        let modalValidate = document.getElementById('executeCompetenceModal');
        modalValidate.parentNode.replaceChild(modalValidate.cloneNode(true), modalValidate);
        modalValidate = document.getElementById('executeCompetenceModal');
        modalValidate.addEventListener('click', () => {
            this.execute();
            this.getEntities();
        });
    }
    execute() {
        console.log(this.Libelle);
    }
    openModal(id) {
        this.modalService.open(id);
    }
    closeModal(id) {
        document.getElementById('modalMessage').innerHTML = '';
        this.resetModal();
        this.modalService.close(id);
    }
    resetModal() {
        this.getEntities();
        // e.firstElementChild can be used.
        const modalBody = document.getElementById('modalBody');
        let child = modalBody.lastElementChild;
        while (child) {
            modalBody.removeChild(child);
            child = modalBody.lastElementChild;
        }
    }
    createElementWithNameAndBorder(name) {
        const div = this.renderer.createElement('div');
        this.renderer.addClass(div, 'borderedElement');
        const titre = this.renderer.createElement('h4');
        const text = this.renderer.createText(name + '(s)');
        this.renderer.appendChild(titre, text);
        this.renderer.appendChild(div, titre);
        return div;
    }
    addEntity(entity, parent) {
        const newEntity = this.renderer.createElement('div');
        this.renderer.addClass(newEntity, 'ally');
        const newEntityImage = this.renderer.createElement('img');
        this.renderer.setProperty(newEntityImage, 'src', '/assets/' + entity.iconImage);
        this.renderer.setProperty(newEntityImage, 'id', entity.Id_Personnage);
        if (!entity.isAlive) {
            this.renderer.addClass(newEntity, 'dead');
        }
        const divStatistiques = this.renderer.createElement('div');
        this.renderer.addClass(divStatistiques, 'divStatistiques');
        this.renderer.setStyle(divStatistiques, 'text-align', 'center');
        const spanPdv = this.renderer.createElement('span');
        this.renderer.setStyle(spanPdv, 'color', '#FF006A');
        this.renderer.setStyle(spanPdv, 'width', '40%');
        this.renderer.setStyle(spanPdv, 'display', 'inline-block');
        this.renderer.setAttribute(spanPdv, 'id', 'Damaged' + entity.Id_Personnage);
        spanPdv.innerHTML = entity.DegatsRecus;
        const spanSeparator = this.renderer.createElement('span');
        this.renderer.setStyle(spanSeparator, 'display', 'inline-block');
        spanSeparator.innerHTML = ' | ';
        const spanBouclier = this.renderer.createElement('span');
        this.renderer.setStyle(spanBouclier, 'color', '#C675DE');
        this.renderer.setStyle(spanBouclier, 'width', '40%');
        this.renderer.setStyle(spanBouclier, 'display', 'inline-block');
        spanBouclier.innerHTML = entity.Bouclier;
        this.renderer.appendChild(newEntity, newEntityImage);
        this.renderer.appendChild(divStatistiques, spanPdv);
        this.renderer.appendChild(divStatistiques, spanSeparator);
        this.renderer.appendChild(divStatistiques, spanBouclier);
        this.renderer.appendChild(newEntity, divStatistiques);
        this.renderer.appendChild(parent, newEntity);
        this.renderer.listen(newEntityImage, 'click', () => { this.entityManagement(newEntityImage); });
    }
    entityManagement(newEntityImage) {
        console.log('Should be defined in children class');
    }
    getEntities() {
        this.entities = this.entitiesService.getEntities(this.http, this.combatSession);
    }
};
CompetenceComponent.ctorParameters = () => [
    { type: _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpClient"] },
    { type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Renderer2"] },
    { type: _modal__WEBPACK_IMPORTED_MODULE_4__["ModalService"] },
    { type: _service_statistiques_service__WEBPACK_IMPORTED_MODULE_5__["StatistiquesService"] },
    { type: _service_entities_service__WEBPACK_IMPORTED_MODULE_7__["EntitiesService"] }
];
CompetenceComponent.propDecorators = {
    Id_Competence: [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"] }]
};
CompetenceComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-competence',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!./competence.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/competence/competence.component.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./competence.component.scss */ "./src/app/combat-session/competence/competence.component.scss")).default]
    })
], CompetenceComponent);



/***/ }),

/***/ "./src/app/combat-session/competence/targets.service.ts":
/*!**************************************************************!*\
  !*** ./src/app/combat-session/competence/targets.service.ts ***!
  \**************************************************************/
/*! exports provided: Targets */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Targets", function() { return Targets; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let Targets = class Targets {
    constructor() { }
    adaptFromOutside(item) {
        this.idCompetenceUse = item.idCompetenceUse;
        this.idCompetence = item.idCompetence;
        this.idLauncher = item.idLauncher;
        this.idReceiver = item.idReceiver;
        this.turnUse = item.turnUse;
    }
};
Targets.ctorParameters = () => [];
Targets = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])({
        providedIn: 'root'
    })
], Targets);



/***/ }),

/***/ "./src/app/combat-session/competences/boule-de-lave/boule-de-lave.component.scss":
/*!***************************************************************************************!*\
  !*** ./src/app/combat-session/competences/boule-de-lave/boule-de-lave.component.scss ***!
  \***************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".borderNormalShot {\n  border: dashed 1px orange;\n}\n\n.borderedExplosion {\n  border: dashed 2px darkred;\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvY29tYmF0LXNlc3Npb24vY29tcGV0ZW5jZXMvYm91bGUtZGUtbGF2ZS9ib3VsZS1kZS1sYXZlLmNvbXBvbmVudC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0UseUJBQUE7QUFDRjs7QUFFQTtFQUNFLDBCQUFBO0FBQ0YiLCJmaWxlIjoic3JjL2FwcC9jb21iYXQtc2Vzc2lvbi9jb21wZXRlbmNlcy9ib3VsZS1kZS1sYXZlL2JvdWxlLWRlLWxhdmUuY29tcG9uZW50LnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyIuYm9yZGVyTm9ybWFsU2hvdCB7XHJcbiAgYm9yZGVyIDogZGFzaGVkIDFweCBvcmFuZ2U7XHJcbn1cclxuXHJcbi5ib3JkZXJlZEV4cGxvc2lvbiB7XHJcbiAgYm9yZGVyIDogZGFzaGVkIDJweCBkYXJrcmVkO1xyXG59XHJcbiJdfQ== */");

/***/ }),

/***/ "./src/app/combat-session/competences/boule-de-lave/boule-de-lave.component.ts":
/*!*************************************************************************************!*\
  !*** ./src/app/combat-session/competences/boule-de-lave/boule-de-lave.component.ts ***!
  \*************************************************************************************/
/*! exports provided: BouleDeLaveComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "BouleDeLaveComponent", function() { return BouleDeLaveComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _competence_competence_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../competence/competence.component */ "./src/app/combat-session/competence/competence.component.ts");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm2015/http.js");
/* harmony import */ var _modal__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../_modal */ "./src/app/_modal/index.ts");
/* harmony import */ var _service_statistiques_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../service/statistiques.service */ "./src/app/service/statistiques.service.ts");
/* harmony import */ var _service_entities_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../service/entities.service */ "./src/app/service/entities.service.ts");







let BouleDeLaveComponent = class BouleDeLaveComponent extends _competence_competence_component__WEBPACK_IMPORTED_MODULE_2__["CompetenceComponent"] {
    constructor(http, renderer, modalService, statistiqueService, entitiesService) {
        super(http, renderer, modalService, statistiqueService, entitiesService);
    }
    ngOnInit() {
    }
    getIdCompetence() {
        return 176;
    }
    displayCompetence() {
        console.log('BouleDeLaveComponent.component');
        // console.log(this.getDescription());
        console.log(this.Libelle);
    }
    execute() {
        console.log('Execution : BouleDeLaveComponent.component');
    }
};
BouleDeLaveComponent.ctorParameters = () => [
    { type: _angular_common_http__WEBPACK_IMPORTED_MODULE_3__["HttpClient"] },
    { type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Renderer2"] },
    { type: _modal__WEBPACK_IMPORTED_MODULE_4__["ModalService"] },
    { type: _service_statistiques_service__WEBPACK_IMPORTED_MODULE_5__["StatistiquesService"] },
    { type: _service_entities_service__WEBPACK_IMPORTED_MODULE_6__["EntitiesService"] }
];
BouleDeLaveComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-boule-de-feu',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!../../competence/competence.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/competence/competence.component.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./boule-de-lave.component.scss */ "./src/app/combat-session/competences/boule-de-lave/boule-de-lave.component.scss")).default]
    })
], BouleDeLaveComponent);



/***/ }),

/***/ "./src/app/combat-session/competences/canalisation/canalisation.component.scss":
/*!*************************************************************************************!*\
  !*** ./src/app/combat-session/competences/canalisation/canalisation.component.scss ***!
  \*************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".borderNormalShot {\n  border: dashed 1px orange;\n}\n\n.borderedExplosion {\n  border: dashed 2px darkred;\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvY29tYmF0LXNlc3Npb24vY29tcGV0ZW5jZXMvY2FuYWxpc2F0aW9uL2NhbmFsaXNhdGlvbi5jb21wb25lbnQuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUNFLHlCQUFBO0FBQ0Y7O0FBRUE7RUFDRSwwQkFBQTtBQUNGIiwiZmlsZSI6InNyYy9hcHAvY29tYmF0LXNlc3Npb24vY29tcGV0ZW5jZXMvY2FuYWxpc2F0aW9uL2NhbmFsaXNhdGlvbi5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIi5ib3JkZXJOb3JtYWxTaG90IHtcclxuICBib3JkZXIgOiBkYXNoZWQgMXB4IG9yYW5nZTtcclxufVxyXG5cclxuLmJvcmRlcmVkRXhwbG9zaW9uIHtcclxuICBib3JkZXIgOiBkYXNoZWQgMnB4IGRhcmtyZWQ7XHJcbn1cclxuIl19 */");

/***/ }),

/***/ "./src/app/combat-session/competences/canalisation/canalisation.component.ts":
/*!***********************************************************************************!*\
  !*** ./src/app/combat-session/competences/canalisation/canalisation.component.ts ***!
  \***********************************************************************************/
/*! exports provided: CanalisationComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "CanalisationComponent", function() { return CanalisationComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm2015/http.js");
/* harmony import */ var _competence_competence_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../competence/competence.component */ "./src/app/combat-session/competence/competence.component.ts");
/* harmony import */ var _modal__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../_modal */ "./src/app/_modal/index.ts");
/* harmony import */ var _service_statistiques_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../service/statistiques.service */ "./src/app/service/statistiques.service.ts");
/* harmony import */ var _service_entities_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../service/entities.service */ "./src/app/service/entities.service.ts");







let CanalisationComponent = class CanalisationComponent extends _competence_competence_component__WEBPACK_IMPORTED_MODULE_3__["CompetenceComponent"] {
    constructor(http, renderer, modalService, statistiqueService, entitiesService) {
        super(http, renderer, modalService, statistiqueService, entitiesService);
    }
    ngOnInit() {
    }
    getIdCompetence() {
        return 185;
    }
    displayCompetence() {
        console.log('CanalisationComponent.component');
        // console.log(this.getDescription());
        console.log(this.Libelle);
    }
    execute() {
        console.log('Execution : CanalisationComponent.component');
    }
};
CanalisationComponent.ctorParameters = () => [
    { type: _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpClient"] },
    { type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Renderer2"] },
    { type: _modal__WEBPACK_IMPORTED_MODULE_4__["ModalService"] },
    { type: _service_statistiques_service__WEBPACK_IMPORTED_MODULE_5__["StatistiquesService"] },
    { type: _service_entities_service__WEBPACK_IMPORTED_MODULE_6__["EntitiesService"] }
];
CanalisationComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-canalisation',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!../../competence/competence.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/competence/competence.component.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./canalisation.component.scss */ "./src/app/combat-session/competences/canalisation/canalisation.component.scss")).default]
    })
], CanalisationComponent);



/***/ }),

/***/ "./src/app/combat-session/competences/javelot-de-lave/javelot-de-lave.component.scss":
/*!*******************************************************************************************!*\
  !*** ./src/app/combat-session/competences/javelot-de-lave/javelot-de-lave.component.scss ***!
  \*******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL2NvbWJhdC1zZXNzaW9uL2NvbXBldGVuY2VzL2phdmVsb3QtZGUtbGF2ZS9qYXZlbG90LWRlLWxhdmUuY29tcG9uZW50LnNjc3MifQ== */");

/***/ }),

/***/ "./src/app/combat-session/competences/javelot-de-lave/javelot-de-lave.component.ts":
/*!*****************************************************************************************!*\
  !*** ./src/app/combat-session/competences/javelot-de-lave/javelot-de-lave.component.ts ***!
  \*****************************************************************************************/
/*! exports provided: JavelotDeLaveComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "JavelotDeLaveComponent", function() { return JavelotDeLaveComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm2015/http.js");
/* harmony import */ var _competence_competence_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../competence/competence.component */ "./src/app/combat-session/competence/competence.component.ts");
/* harmony import */ var _modal__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../_modal */ "./src/app/_modal/index.ts");
/* harmony import */ var _service_statistiques_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../service/statistiques.service */ "./src/app/service/statistiques.service.ts");
/* harmony import */ var _service_entities_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../service/entities.service */ "./src/app/service/entities.service.ts");







let JavelotDeLaveComponent = class JavelotDeLaveComponent extends _competence_competence_component__WEBPACK_IMPORTED_MODULE_3__["CompetenceComponent"] {
    constructor(http, renderer, modalService, statistiqueService, entitiesService) {
        super(http, renderer, modalService, statistiqueService, entitiesService);
    }
    ngOnInit() {
    }
    getIdCompetence() {
        return 177;
    }
    displayCompetence() {
        console.log('JavelotDeLaveComponent.component');
        // console.log(this.getDescription());
        console.log(this.Libelle);
    }
    execute() {
        console.log('Execution : JavelotDeLaveComponent.component');
    }
};
JavelotDeLaveComponent.ctorParameters = () => [
    { type: _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpClient"] },
    { type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Renderer2"] },
    { type: _modal__WEBPACK_IMPORTED_MODULE_4__["ModalService"] },
    { type: _service_statistiques_service__WEBPACK_IMPORTED_MODULE_5__["StatistiquesService"] },
    { type: _service_entities_service__WEBPACK_IMPORTED_MODULE_6__["EntitiesService"] }
];
JavelotDeLaveComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-javelot-de-lave',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!../../competence/competence.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/competence/competence.component.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./javelot-de-lave.component.scss */ "./src/app/combat-session/competences/javelot-de-lave/javelot-de-lave.component.scss")).default]
    })
], JavelotDeLaveComponent);



/***/ }),

/***/ "./src/app/combat-session/competences/jet-de-lave/jet-de-lave.component.scss":
/*!***********************************************************************************!*\
  !*** ./src/app/combat-session/competences/jet-de-lave/jet-de-lave.component.scss ***!
  \***********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".ally, .ally img {\n  height: 20vh;\n  width: 10vh;\n  border-radius: 15px 15px 0px 0px;\n}\n\n.ally {\n  display: inline-block;\n  margin-right: 5px;\n  position: relative;\n}\n\n.dead {\n  background-color: red;\n}\n\n.dead img {\n  -webkit-filter: opacity(0.7);\n          filter: opacity(0.7);\n}\n\n.borderedElement {\n  border-top: solid 1px;\n  border-bottom: solid 1px;\n  padding-bottom: 5px;\n  margin-bottom: 5px;\n}\n\n.borderNormalShot {\n  border: dashed 2px orange;\n}\n\n.borderedExplosion {\n  border: dashed 3px darkred;\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvY29tYmF0LXNlc3Npb24vY29tcGV0ZW5jZXMvamV0LWRlLWxhdmUvamV0LWRlLWxhdmUuY29tcG9uZW50LnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFDRSxZQUFBO0VBQ0EsV0FBQTtFQUNBLGdDQUFBO0FBQ0Y7O0FBQ0E7RUFDRSxxQkFBQTtFQUNBLGlCQUFBO0VBQ0Esa0JBQUE7QUFFRjs7QUFDQTtFQUNFLHFCQUFBO0FBRUY7O0FBQ0E7RUFDRSw0QkFBQTtVQUFBLG9CQUFBO0FBRUY7O0FBQ0E7RUFDRSxxQkFBQTtFQUNBLHdCQUFBO0VBQ0EsbUJBQUE7RUFDQSxrQkFBQTtBQUVGOztBQUNBO0VBQ0UseUJBQUE7QUFFRjs7QUFDQTtFQUNFLDBCQUFBO0FBRUYiLCJmaWxlIjoic3JjL2FwcC9jb21iYXQtc2Vzc2lvbi9jb21wZXRlbmNlcy9qZXQtZGUtbGF2ZS9qZXQtZGUtbGF2ZS5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIi5hbGx5LCAuYWxseSBpbWcge1xyXG4gIGhlaWdodCA6IDIwdmg7XHJcbiAgd2lkdGggOiAxMHZoO1xyXG4gIGJvcmRlci1yYWRpdXM6IDE1cHggMTVweCAwcHggMHB4O1xyXG59XHJcbi5hbGx5IHtcclxuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XHJcbiAgbWFyZ2luLXJpZ2h0OiA1cHg7XHJcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xyXG59XHJcblxyXG4uZGVhZCB7XHJcbiAgYmFja2dyb3VuZC1jb2xvcjogcmVkO1xyXG59XHJcblxyXG4uZGVhZCBpbWd7XHJcbiAgZmlsdGVyOiBvcGFjaXR5KDAuNyk7XHJcbn1cclxuXHJcbi5ib3JkZXJlZEVsZW1lbnQge1xyXG4gIGJvcmRlci10b3A6IHNvbGlkIDFweDtcclxuICBib3JkZXItYm90dG9tIDogc29saWQgMXB4O1xyXG4gIHBhZGRpbmctYm90dG9tIDogNXB4O1xyXG4gIG1hcmdpbi1ib3R0b20gOiA1cHg7XHJcbn1cclxuXHJcbi5ib3JkZXJOb3JtYWxTaG90IHtcclxuICBib3JkZXIgOiBkYXNoZWQgMnB4IG9yYW5nZTtcclxufVxyXG5cclxuLmJvcmRlcmVkRXhwbG9zaW9uIHtcclxuICBib3JkZXIgOiBkYXNoZWQgM3B4IGRhcmtyZWQ7XHJcbn1cclxuIl19 */");

/***/ }),

/***/ "./src/app/combat-session/competences/jet-de-lave/jet-de-lave.component.ts":
/*!*********************************************************************************!*\
  !*** ./src/app/combat-session/competences/jet-de-lave/jet-de-lave.component.ts ***!
  \*********************************************************************************/
/*! exports provided: JetDeLaveComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "JetDeLaveComponent", function() { return JetDeLaveComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm2015/http.js");
/* harmony import */ var _competence_competence_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../competence/competence.component */ "./src/app/combat-session/competence/competence.component.ts");
/* harmony import */ var _modal__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../_modal */ "./src/app/_modal/index.ts");
/* harmony import */ var _personnage_Effect__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../personnage/Effect */ "./src/app/combat-session/personnage/Effect.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _service_statistiques_service__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../../service/statistiques.service */ "./src/app/service/statistiques.service.ts");
/* harmony import */ var _service_entities_service__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../../../service/entities.service */ "./src/app/service/entities.service.ts");









let JetDeLaveComponent = class JetDeLaveComponent extends _competence_competence_component__WEBPACK_IMPORTED_MODULE_3__["CompetenceComponent"] {
    constructor(http, renderer, modalService, route, statistiqueService, entitiesService) {
        super(http, renderer, modalService, statistiqueService, entitiesService);
        this.route = route;
        this.clickedCharacter = [];
        this.clickedExplosion = [];
        this.actuallyClicked = -1;
    }
    getIdCompetence() {
        return 175;
    }
    ngOnInit() {
    }
    competenceInteraction() {
        this.actuallyClicked = -1;
        super.competenceInteraction();
    }
    execute() {
        // this.testPost();
        if (this.actuallyClicked !== -1) {
            if (this.clickedCharacter.length === 2 && this.clickedCharacter[0] === this.clickedCharacter[1]
                && this.clickedCharacter[1] === this.actuallyClicked) {
                console.log(this.clickedCharacter[0] + ' 1: ' + (+this.dealNormalDamages(this.clickedCharacter[0])));
                for (const index of this.clickedExplosion) {
                    console.log(index + ':' + (+this.dealNormalDamages(index)));
                }
                // this.applyEffect();
                this.clickedExplosion = [];
                this.clickedCharacter = [];
            }
            else if (this.clickedCharacter[this.clickedCharacter.length - 1] === this.actuallyClicked) {
                console.log(this.actuallyClicked + ' 2: ' + +this.dealNormalDamages(this.actuallyClicked));
                this.clickedCharacter.push(this.actuallyClicked);
            }
            else {
                console.log(this.actuallyClicked + ' 3: ' + +this.dealNormalDamages(this.actuallyClicked));
                this.clickedCharacter = [this.actuallyClicked];
            }
            console.log(this.clickedCharacter);
            this.closeModal('useCompetence');
        }
        else {
            const modalBody = document.getElementById('modalMessage');
            modalBody.innerHTML = '<span style="color: orangered"> Vous devez choisir une entité avant de valider </span>';
        }
    }
    entityManagement(newEntityImage) {
        if (!newEntityImage.parentElement.classList.contains('dead')) {
            if (this.actuallyClicked === -1 || this.actuallyClicked === newEntityImage.id) {
                if (this.clickedCharacter.length === 2 && this.clickedCharacter[this.clickedCharacter.length - 1] === newEntityImage.id) {
                    if (!document.getElementById(newEntityImage.id).classList.contains('borderedExplosion')) {
                        this.renderer.addClass(newEntityImage, 'borderedExplosion');
                        this.actuallyClicked = newEntityImage.id;
                    }
                    else {
                        this.renderer.removeClass(newEntityImage, 'borderedExplosion');
                        this.actuallyClicked = -1;
                        for (const child of this.clickedExplosion) {
                            document.getElementById('' + child).classList.remove('borderNormalShot');
                        }
                        this.clickedExplosion = [];
                    }
                }
                else {
                    if (!document.getElementById(newEntityImage.id).classList.contains('borderNormalShot')) {
                        this.renderer.addClass(newEntityImage, 'borderNormalShot');
                        this.actuallyClicked = newEntityImage.id;
                    }
                    else {
                        this.renderer.removeClass(newEntityImage, 'borderNormalShot');
                        this.actuallyClicked = -1;
                    }
                }
            }
            else if (this.explosionWillHappend()) {
                console.log('EXPLOSION WILL OCCUR !');
                if (!document.getElementById(newEntityImage.id).classList.contains('borderNormalShot') && this.clickedExplosion.length < 4) {
                    this.renderer.addClass(newEntityImage, 'borderNormalShot');
                    this.clickedExplosion.push(newEntityImage.id);
                }
                else {
                    this.renderer.removeClass(newEntityImage, 'borderNormalShot');
                    this.clickedExplosion = this.clickedExplosion.filter(item => item !== newEntityImage.id);
                }
            }
            document.getElementById('modalMessage').innerHTML = '';
        }
        else if (+this.actuallyClicked === -1) {
            document.getElementById('modalMessage').innerHTML = 'Vous ne pouvez choisir une entité K.O.';
        }
    }
    explosionWillHappend() {
        return (this.clickedCharacter.length === 2 && this.clickedCharacter[0] === this.actuallyClicked);
    }
    dealNormalDamages(id) {
        const bc = this.statistiques.bonusCombat;
        let result = this.getValueWithBonusStatistique(1, bc.Intelligence);
        result = (+result + +bc.DegatsFlat + +bc.DegatsMagiqueFlat + +bc.SortFlat)
            * (1 + +bc.DegatsMagiquePourcentage) * (1 + +bc.DegatsPourcentage) * (1 + +bc.SortPourcentage);
        if (this.explosionWillHappend() && id === this.actuallyClicked) {
            result = result * 1.5;
        }
        console.log(+result);
        new _personnage_Effect__WEBPACK_IMPORTED_MODULE_5__["Effect"]().setEffect(1, 0, result, 0, this.Id_Competence, this.statistiques.Id_Personnage, id, 0, 0, 0).sendEffect(this.http);
        return result;
    }
    getValueWithBonusCombat(indice) {
        const bc = this.statistiques.bonusCombat;
        let result = super.getValueWithBonusStatistique(indice, +bc.Intelligence);
        result = (+result + +bc.DegatsFlat + +bc.DegatsMagiqueFlat + +bc.SortFlat)
            * (1 + +bc.DegatsMagiquePourcentage) * (1 + +bc.DegatsPourcentage) * (1 + +bc.SortPourcentage);
        return result;
    }
    getEffectValueWithBonusCombat() {
        const bc = this.statistiques.bonusCombat;
        let result = super.getEffectValueWithBonusStatistique(bc.Intelligence);
        result = (+result + +bc.DegatsFlat + +bc.DegatsMagiqueFlat + +bc.SortFlat)
            * (1 + +bc.DegatsMagiquePourcentage) * (1 + +bc.DegatsPourcentage) * (1 + +bc.SortPourcentage);
        return result;
    }
    closeModal(id) {
        this.actuallyClicked = -1;
        super.closeModal(id);
    }
};
JetDeLaveComponent.ctorParameters = () => [
    { type: _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpClient"] },
    { type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Renderer2"] },
    { type: _modal__WEBPACK_IMPORTED_MODULE_4__["ModalService"] },
    { type: _angular_router__WEBPACK_IMPORTED_MODULE_6__["ActivatedRoute"] },
    { type: _service_statistiques_service__WEBPACK_IMPORTED_MODULE_7__["StatistiquesService"] },
    { type: _service_entities_service__WEBPACK_IMPORTED_MODULE_8__["EntitiesService"] }
];
JetDeLaveComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-jet-de-lave',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!../../competence/competence.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/competence/competence.component.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./jet-de-lave.component.scss */ "./src/app/combat-session/competences/jet-de-lave/jet-de-lave.component.scss")).default]
    })
], JetDeLaveComponent);



/***/ }),

/***/ "./src/app/combat-session/new-competence/new-competence.component.scss":
/*!*****************************************************************************!*\
  !*** ./src/app/combat-session/new-competence/new-competence.component.scss ***!
  \*****************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL2NvbWJhdC1zZXNzaW9uL25ldy1jb21wZXRlbmNlL25ldy1jb21wZXRlbmNlLmNvbXBvbmVudC5zY3NzIn0= */");

/***/ }),

/***/ "./src/app/combat-session/new-competence/new-competence.component.ts":
/*!***************************************************************************!*\
  !*** ./src/app/combat-session/new-competence/new-competence.component.ts ***!
  \***************************************************************************/
/*! exports provided: NewCompetenceComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "NewCompetenceComponent", function() { return NewCompetenceComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _competence_effect_competence_effect_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../competence-effect/competence-effect.component */ "./src/app/combat-session/competence-effect/competence-effect.component.ts");
/* harmony import */ var _service_entities_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../service/entities.service */ "./src/app/service/entities.service.ts");
/* harmony import */ var _service_statistiques_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../service/statistiques.service */ "./src/app/service/statistiques.service.ts");
/* harmony import */ var _modal__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../_modal */ "./src/app/_modal/index.ts");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm2015/http.js");
/* harmony import */ var _service_rest_service__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../service/rest.service */ "./src/app/service/rest.service.ts");
/* harmony import */ var rxjs_operators__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! rxjs/operators */ "./node_modules/rxjs/_esm2015/operators/index.js");
/* harmony import */ var _competence_targets_service__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../competence/targets.service */ "./src/app/combat-session/competence/targets.service.ts");










let NewCompetenceComponent = class NewCompetenceComponent {
    // tslint:disable:variable-name
    constructor(http, renderer, modalService, statistiqueService, entitiesService) {
        this.http = http;
        this.renderer = renderer;
        this.modalService = modalService;
        this.statistiqueService = statistiqueService;
        this.entitiesService = entitiesService;
        this.combatSession = 1;
        this.entities = [];
        this.Effects = [];
        this.linkedEffects = [];
        this.nonLinkedEffects = [];
        this.previousCompetenceUses = [];
        this.previousCharacterUses = [];
        this.currentlyClickedCharacters = [];
        this.actuallyClicked = -1;
        this.Id_Competence = this.getIdCompetence();
        this.setStatistiques(this.statistiqueService.getStatistique());
        this.loadItSelfWithEffect();
        this.getEntities();
        this.setPreviousCharacterUses();
        this.setPreviousCompetenceUses();
    }
    getIdCompetence() {
        return 0;
    }
    ngOnInit() {
    }
    setStatistiques(statistiques) {
        this.statistiques = statistiques;
    }
    loadItSelfWithEffect() {
        // console.log(this.Id_Competence);
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_7__["BASE_URL"] + '/Classes/version_mobile/REST/competenceWithEffectsAngularRest.php?id=' + this.Id_Competence;
        const competenceObservable = this.http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_8__["map"])((item) => this.adaptFromInsideWithEffects(item)));
        const competenceSuscription = competenceObservable.subscribe(() => {
            this.setLinkedEffects();
            competenceSuscription.unsubscribe();
        }, (error) => {
            console.log('Une erreur est survenue dans la suscription de la competence: ' + error);
        }, () => {
        });
    }
    adaptFromInsideWithEffects(item) {
        this.Id_Competence = item.Id_Competence;
        this.Libelle = item.Libelle;
        this.Image = item.Image;
        this.Niveau = item.Niveau;
        this.Portee = item.Portee;
        this.Cout_En_PA = item.Cout_En_PA;
        this.Cout_En_Ressource = item.Cout_En_Ressource;
        this.Ressource = item.Ressource;
        this.Description1 = item.Description1;
        this.Fin = item.Fin;
        this.Entete = item.Entete;
        this.Exemple = item.Exemple;
        this.Niveau_Requis = item.Niveau_Requis;
        this.Competence_Requise_1 = item.Competence_Requise_1;
        this.Competence_Requise_2 = item.Competence_Requise_2;
        this.Competence_Requise_3 = item.Competence_Requise_3;
        this.TempsRechargement = item.TempsRechargement;
        this.Duree = item.Duree;
        this.Cooldown = item.Cooldown;
        for (const effect of item.effects) {
            const newEffect = new _competence_effect_competence_effect_component__WEBPACK_IMPORTED_MODULE_2__["CompetenceEffectComponent"](this.http, this.renderer, this.modalService, this.statistiqueService, this.entitiesService);
            // newEffect.idCompetenceEffect = effect.idCompetenceEffect;
            newEffect.adaptFromInside(effect);
            this.Effects.push(newEffect);
        }
    }
    competenceInteraction() {
        this.resetModal();
        this.openModal('useCompetence');
        const modalBody = document.getElementById('modalBody');
        const divAllys = this.createElementWithNameAndBorder('Ally');
        const divEnnemys = this.createElementWithNameAndBorder('Ennemy');
        const divNeutrals = this.createElementWithNameAndBorder('Neutral');
        for (const entity of this.entities) {
            if (+(+entity.team - +this.statistiques.team) === 0) {
                if (!(+entity.Id_Personnage === +this.statistiques.Id_Personnage)) {
                    this.addEntity(entity, divAllys);
                }
            }
            else if (+(+entity.team - +this.statistiques.team) === 1) {
                this.addEntity(entity, divEnnemys);
            }
            else if (+(+entity.team - +this.statistiques.team) === 2) {
                this.addEntity(entity, divNeutrals);
            }
        }
        this.renderer.appendChild(modalBody, divAllys);
        this.renderer.appendChild(modalBody, divEnnemys);
        this.renderer.appendChild(modalBody, divNeutrals);
        let modalClose = document.getElementById('closeCompetenceModal');
        modalClose.parentNode.replaceChild(modalClose.cloneNode(true), modalClose);
        modalClose = document.getElementById('closeCompetenceModal');
        modalClose.addEventListener('click', () => {
            this.closeModal('useCompetence');
        });
        let modalValidate = document.getElementById('executeCompetenceModal');
        modalValidate.parentNode.replaceChild(modalValidate.cloneNode(true), modalValidate);
        modalValidate = document.getElementById('executeCompetenceModal');
        modalValidate.addEventListener('click', () => {
            this.execute();
            this.getEntities();
        });
    }
    execute() {
        //////////////////////////////////////////
        //                                      //
        //           TODO: Soon(tm)             //
        //                                      //
        //////////////////////////////////////////
        console.log(this.Libelle);
        //////////////////////////////////////////
        //                                      //
        //           TODO: Soon(tm)             //
        //                                      //
        //////////////////////////////////////////
    }
    openModal(id) {
        this.modalService.open(id);
    }
    closeModal(id) {
        document.getElementById('modalMessage').innerHTML = '';
        this.resetModal();
        this.modalService.close(id);
    }
    resetModal() {
        this.getEntities();
        // e.firstElementChild can be used.
        const modalBody = document.getElementById('modalBody');
        let child = modalBody.lastElementChild;
        while (child) {
            modalBody.removeChild(child);
            child = modalBody.lastElementChild;
        }
    }
    createElementWithNameAndBorder(name) {
        const div = this.renderer.createElement('div');
        this.renderer.addClass(div, 'borderedElement');
        const titre = this.renderer.createElement('h4');
        const text = this.renderer.createText(name + '(s)');
        this.renderer.appendChild(titre, text);
        this.renderer.appendChild(div, titre);
        return div;
    }
    addEntity(entity, parent) {
        const newEntity = this.renderer.createElement('div');
        this.renderer.addClass(newEntity, 'ally');
        const newEntityImage = this.renderer.createElement('img');
        this.renderer.setProperty(newEntityImage, 'src', '/assets/' + entity.iconImage);
        this.renderer.setProperty(newEntityImage, 'id', entity.Id_Personnage);
        if (!entity.isAlive) {
            this.renderer.addClass(newEntity, 'dead');
        }
        const divStatistiques = this.renderer.createElement('div');
        this.renderer.addClass(divStatistiques, 'divStatistiques');
        this.renderer.setStyle(divStatistiques, 'text-align', 'center');
        const spanPdv = this.renderer.createElement('span');
        this.renderer.setStyle(spanPdv, 'color', '#FF006A');
        this.renderer.setStyle(spanPdv, 'width', '40%');
        this.renderer.setStyle(spanPdv, 'display', 'inline-block');
        this.renderer.setAttribute(spanPdv, 'id', 'Damaged' + entity.Id_Personnage);
        spanPdv.innerHTML = entity.DegatsRecus;
        const spanSeparator = this.renderer.createElement('span');
        this.renderer.setStyle(spanSeparator, 'display', 'inline-block');
        spanSeparator.innerHTML = ' | ';
        const spanBouclier = this.renderer.createElement('span');
        this.renderer.setStyle(spanBouclier, 'color', '#C675DE');
        this.renderer.setStyle(spanBouclier, 'width', '40%');
        this.renderer.setStyle(spanBouclier, 'display', 'inline-block');
        spanBouclier.innerHTML = entity.Bouclier;
        this.renderer.appendChild(newEntity, newEntityImage);
        this.renderer.appendChild(divStatistiques, spanPdv);
        this.renderer.appendChild(divStatistiques, spanSeparator);
        this.renderer.appendChild(divStatistiques, spanBouclier);
        this.renderer.appendChild(newEntity, divStatistiques);
        this.renderer.appendChild(parent, newEntity);
        this.renderer.listen(newEntityImage, 'click', () => { this.entityManagement(newEntityImage); });
    }
    entityManagement(newEntityImage) {
        if (!newEntityImage.parentElement.classList.contains('dead')) {
            if (this.actualEffectTreated === 0) {
                if (this.hasLinkedEffects()) {
                    if (this.moreThanOneLinkedEffectsAreCibleUnique(this.actuallyClicked, this.previousCompetenceUses)) {
                        if (!document.getElementById(newEntityImage.id).classList.contains('borderedExplosion')) {
                            this.renderer.addClass(newEntityImage, 'borderedExplosion');
                            this.actuallyClicked = newEntityImage.id;
                        }
                        else {
                            this.renderer.removeClass(newEntityImage, 'borderedExplosion');
                            this.actuallyClicked = -1;
                            for (const child of this.currentlyClickedCharacters) {
                                document.getElementById('' + child).classList.remove('borderNormalShot');
                            }
                            this.currentlyClickedCharacters = [];
                        }
                    }
                    else { // Si il n'y a qu'un seul effet lié cible unique
                        if (!document.getElementById(newEntityImage.id).classList.contains('borderNormalShot')) {
                            this.renderer.addClass(newEntityImage, 'borderNormalShot');
                            this.actuallyClicked = newEntityImage.id;
                        }
                        else {
                            this.renderer.removeClass(newEntityImage, 'borderNormalShot');
                            this.actuallyClicked = -1;
                        }
                    }
                }
            }
            else {
                const currentEffect = this.nonLinkedEffects[this.actualEffectTreated - 1];
                if (currentEffect.clickedCharacters.includes(+newEntityImage.id)) {
                    this.renderer.removeClass(newEntityImage, 'borderNormalShot');
                    currentEffect.clickedCharacters.splice(currentEffect.clickedCharacters.indexOf(+newEntityImage.id), 1);
                }
                else {
                    if (currentEffect.numberOfTarget > currentEffect.clickedCharacters.length) {
                        this.renderer.addClass(newEntityImage, 'borderedExplosion');
                        currentEffect.clickedCharacters.push(+newEntityImage.id);
                    }
                }
            }
        }
        else if (+this.actuallyClicked === -1) {
            document.getElementById('modalMessage').innerHTML = 'Vous ne pouvez choisir une entité K.O.';
        }
    }
    hasLinkedEffects() {
        return this.linkedEffects.length > 0;
    }
    getNumberOfLinkedEffects() {
        return this.linkedEffects.length;
    }
    setLinkedEffects() {
        for (const effect of this.Effects) {
            if (effect.linkedEffect) {
                this.linkedEffects.push(effect);
            }
        }
    }
    setNonLinkedEffects() {
        for (const effect of this.Effects) {
            if (!effect.linkedEffect) {
                if (this.nonLinkedEffects.length === 0) {
                    this.linkedEffects.push(effect);
                }
                else {
                    let index = 0;
                    while (this.nonLinkedEffects[index].effectOrder < effect.effectOrder) {
                        index++;
                    }
                    if (index === this.nonLinkedEffects.length)
                        this.linkedEffects.push(effect);
                    else {
                        this.nonLinkedEffects.push(this.nonLinkedEffects[this.nonLinkedEffects.length - 1]);
                        let moovingIndex = this.nonLinkedEffects.length - 1;
                        while (moovingIndex != index) {
                            this.nonLinkedEffects[moovingIndex] = this.nonLinkedEffects[moovingIndex - 1];
                            moovingIndex--;
                        }
                        this.nonLinkedEffects.splice(index, 0, effect); // Normalement, insère l'effet à l'index !! A vérifier !!
                    }
                }
            }
        }
    }
    allLinkedEffectsAreCibleUnique(actuallyClicked, previouslyClickedCharacters) {
        for (const effect of this.linkedEffects) {
            if (effect.canBeUsed(actuallyClicked, previouslyClickedCharacters, this)) {
                if (!(+effect.applicationType === 1 || (+effect.applicationType > 6 && +effect.applicationType < 13))) { // non cible Unique
                    return false;
                }
            }
        }
        return true;
    }
    moreThanOneLinkedEffectsAreCibleUnique(actuallyClicked, previouslyClickedCharacters) {
        let counter = 0;
        for (const effect of this.linkedEffects) {
            if ((+effect.applicationType === 1 || (+effect.applicationType > 6 && +effect.applicationType < 13)) &&
                effect.canBeUsed(actuallyClicked, previouslyClickedCharacters, this)) { // cible Unique
                counter++;
                if (counter > 1) {
                    return true;
                }
            }
        }
        return false;
    }
    getMaximumTargtNumberOfLinkedEffects(actuallyClicked, previouslyClickedCharacters) {
        let maximumTargetNumber = 0;
        for (const effect of this.linkedEffects) {
            if (effect.canBeUsed(actuallyClicked, previouslyClickedCharacters, this) && +effect.numberOfTarget > maximumTargetNumber) {
                maximumTargetNumber = +effect.numberOfTarget;
            }
        }
        return maximumTargetNumber;
    }
    getEntities() {
        this.entities = this.entitiesService.getEntities(this.http, this.combatSession);
    }
    setPreviousCompetenceUses() {
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_7__["BASE_URL"] + '/Classes/version_mobile/REST/getPreviousCompetenceUses.php?idCompetence='
            + this.Id_Competence + '&idLauncher' + this.statistiques.Id_Personnage;
        const targetObservable = this.http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_8__["map"])((data) => data.map(item => item)));
        const targetSuscription = targetObservable.subscribe((value) => {
            for (const targetValues of value) {
                const target = new _competence_targets_service__WEBPACK_IMPORTED_MODULE_9__["Targets"]();
                target.adaptFromOutside(targetValues);
                this.previousCompetenceUses.push(target);
            }
            targetSuscription.unsubscribe();
        }, (error) => {
            console.log('Une erreur est survenue dans la suscription de la target: ' + error);
        }, () => {
        });
    }
    setPreviousCharacterUses() {
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_7__["BASE_URL"] + '/Classes/version_mobile/REST/getPreviousCharacterUses.php?idLauncher=' + this.statistiques.Id_Personnage;
        const targetObservable = this.http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_8__["map"])((data) => data.map(item => item)));
        const targetSuscription = targetObservable.subscribe((value) => {
            for (const targetValues of value) {
                const target = new _competence_targets_service__WEBPACK_IMPORTED_MODULE_9__["Targets"]();
                target.adaptFromOutside(targetValues);
                this.previousCharacterUses.push(target);
            }
            targetSuscription.unsubscribe();
        }, (error) => {
            console.log('Une erreur est survenue dans la suscription de la target: ' + error);
        }, () => {
        });
    }
    getPreviousCharacterUses() {
        return this.previousCharacterUses;
    }
    getPreviousCompetenceUses() {
        return this.previousCompetenceUses;
    }
};
NewCompetenceComponent.ctorParameters = () => [
    { type: _angular_common_http__WEBPACK_IMPORTED_MODULE_6__["HttpClient"] },
    { type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Renderer2"] },
    { type: _modal__WEBPACK_IMPORTED_MODULE_5__["ModalService"] },
    { type: _service_statistiques_service__WEBPACK_IMPORTED_MODULE_4__["StatistiquesService"] },
    { type: _service_entities_service__WEBPACK_IMPORTED_MODULE_3__["EntitiesService"] }
];
NewCompetenceComponent.propDecorators = {
    Id_Competence: [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"] }]
};
NewCompetenceComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-new-competence',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!./new-competence.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/new-competence/new-competence.component.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./new-competence.component.scss */ "./src/app/combat-session/new-competence/new-competence.component.scss")).default]
    })
], NewCompetenceComponent);



/***/ }),

/***/ "./src/app/combat-session/personnage-icon/personnage-icon.component.scss":
/*!*******************************************************************************!*\
  !*** ./src/app/combat-session/personnage-icon/personnage-icon.component.scss ***!
  \*******************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL2NvbWJhdC1zZXNzaW9uL3BlcnNvbm5hZ2UtaWNvbi9wZXJzb25uYWdlLWljb24uY29tcG9uZW50LnNjc3MifQ== */");

/***/ }),

/***/ "./src/app/combat-session/personnage-icon/personnage-icon.component.ts":
/*!*****************************************************************************!*\
  !*** ./src/app/combat-session/personnage-icon/personnage-icon.component.ts ***!
  \*****************************************************************************/
/*! exports provided: PersonnageIconComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "PersonnageIconComponent", function() { return PersonnageIconComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm2015/http.js");
/* harmony import */ var rxjs_operators__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! rxjs/operators */ "./node_modules/rxjs/_esm2015/operators/index.js");
/* harmony import */ var _service_rest_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../service/rest.service */ "./src/app/service/rest.service.ts");





let PersonnageIconComponent = class PersonnageIconComponent {
    constructor(http) {
        this.http = http;
    }
    ngOnInit() {
    }
    loadItSelf() {
        // console.log(this.Id_Competence);
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_4__["BASE_URL"] + '/Classes/version_mobile/REST/personnageIconAngularRest.php?id='
            + this.Id_Personnage;
        const competenceIconObservable = this.http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_3__["map"])((item) => this.adaptFromInside(item)));
        const competenceIconSubsciption = competenceIconObservable.subscribe(() => {
            competenceIconSubsciption.unsubscribe();
        }, (error) => {
            console.log('Une erreur est survenue dans la suscription de la competence: ' + error);
        }, () => {
        });
    }
    adaptFromInside(item) {
        this.Id_Personnage = item.Id_Personnage;
        this.Libelle = item.Libellé;
        this.Image = item.Image;
        this.iconImage = item.iconImage;
        this.Niveau = item.Niveau;
        this.team = item.team;
        this.initiative = item.initiative;
        this.isAlive = item.isAlive;
        this.DegatsRecus = item.DegatsRecus;
        this.Bouclier = item.Bouclier;
    }
};
PersonnageIconComponent.ctorParameters = () => [
    { type: _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpClient"] }
];
PersonnageIconComponent.propDecorators = {
    Id_Personnage: [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"] }]
};
PersonnageIconComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-personnage-icon',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!./personnage-icon.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/personnage-icon/personnage-icon.component.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./personnage-icon.component.scss */ "./src/app/combat-session/personnage-icon/personnage-icon.component.scss")).default]
    })
], PersonnageIconComponent);



/***/ }),

/***/ "./src/app/combat-session/personnage/BonusCombat.ts":
/*!**********************************************************!*\
  !*** ./src/app/combat-session/personnage/BonusCombat.ts ***!
  \**********************************************************/
/*! exports provided: BonusCombat */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "BonusCombat", function() { return BonusCombat; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var rxjs_operators__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! rxjs/operators */ "./node_modules/rxjs/_esm2015/operators/index.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm2015/http.js");
/* harmony import */ var _service_rest_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../service/rest.service */ "./src/app/service/rest.service.ts");





let BonusCombat = class BonusCombat {
    // tslint:disable-next-line:variable-name
    constructor(Id_Personnage, http) {
        this.Id_Personnage = Id_Personnage;
        this.http = http;
        this.loadItSelf();
    }
    loadItSelf() {
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_4__["BASE_URL"] + '/Classes/version_mobile/REST/personnageBonusCombat.php?id=' + this.Id_Personnage;
        // console.log('Récupération personnage');
        const bonusCombatObservable = this.http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_2__["map"])((item) => this.adaptFromInside(item)));
        const bonusCombatSuscription = bonusCombatObservable.subscribe(() => {
            bonusCombatSuscription.unsubscribe();
        }, (error) => { console.log('Une erreur est survenue dans la suscription: ' + error); }, () => { });
    }
    adaptFromInside(item) {
        this.DegatsFlat = item.DegatsFlat;
        this.DegatsPourcentage = item.DegatsPourcentage;
        this.DegatsPhysiqueFlat = item.DegatsPhysiqueFlat;
        this.DegatsPhysiquePourcentage = item.DegatsPhysiquePourcentage;
        this.DegatsMagiqueFlat = item.DegatsMagiqueFlat;
        this.DegatsMagiquePourcentage = item.DegatsMagiquePourcentage;
        this.Force = item.Force;
        this.Agilite = item.Agilite;
        this.Intelligence = item.Intelligence;
        this.Vitalite = item.Vitalite;
        this.PA = item.PA;
        this.PM = item.PM;
        this.SortFlat = item.SortFlat;
        this.SortPourcentage = item.SortPourcentage;
        this.ArmureFlat = item.ArmureFlat;
        this.ArmurePourcentage = item.ArmurePourcentage;
        this.ArmureMagiqueFlat = item.ArmureMagiqueFlat;
        this.ArmureMagiquePourcentage = item.ArmureMagiquePourcentage;
        this.ReductionDegatsFlat = item.ReductionDegatsFlat;
        this.ReductionDegatsPourcentage = item.ReductionDegatsPourcentage;
        this.SoinFlat = item.SoinFlat;
        this.SoinPourcentage = item.SoinPourcentage;
        this.SoinRecuFlat = item.SoinRecuFlat;
        this.SoinRecuPourcentage = item.SoinRecuPourcentage;
        this.IgnoreArmureFlat = item.IgnoreArmureFlat;
        this.IgnoreArmurePourcentage = item.IgnoreArmurePourcentage;
        this.IgnoreArmureMagiqueFlat = item.IgnoreArmureMagiqueFlat;
        this.IgnoreArmureMagiquePourcentage = item.IgnoreArmureMagiquePourcentage;
        this.AugmenteNombreAttaque = item.AugmenteNombreAttaque;
        this.RedirectionDegatFlat = item.RedirectionDegatFlat;
        this.RedirectionDegatPourcentage = item.RedirectionDegatPourcentage;
        this.RenvoieDegatFlat = item.RenvoieDegatFlat;
        this.RenvoieDegatPourcentage = item.RenvoieDegatPourcentage;
        this.Portee = item.Portee;
        this.Degat = item.Degat;
        this.DegatDiffere = item.DegatDiffere;
        this.Soin = item.Soin;
        this.Shield = item.Shield;
        this.DiffererDegatsFlatToTheEndOfEffect = item.DiffererDegatsFlatToTheEndOfEffect;
        this.DiffererDegatsPourcentageToTheEndOfEffect = item.DiffererDegatsPourcentageToTheEndOfEffect;
        this.DiffererDegatsFlat = item.DiffererDegatsFlat;
        this.DiffererDegatsPourcentage = item.DiffererDegatsPourcentage;
    }
    getDegatsPhysiqueWithBonus(value) { return (this.DegatsPhysiqueFlat + value) * this.DegatsPhysiquePourcentage; }
    getDegatsMagiqueWithBonus(value) { return (this.DegatsMagiqueFlat + value) * this.DegatsMagiquePourcentage; }
    getForce(value) { return this.Force; }
    getAgilite(value) { return this.Agilite; }
    getIntelligence(value) { return this.Intelligence; }
    getVitalite(value) { return this.Vitalite; }
    getPA() { return this.PA; }
    getPM() { return this.PM; }
    getSortWithBonus(value) { return (this.SortFlat + value) * this.SortPourcentage; }
    getArmureWithBonus(value) { return (this.ArmureFlat + value) * this.ArmurePourcentage; }
    getArmureMagiqueWithBonus(value) { return (this.ArmureMagiqueFlat + value) * this.ArmureMagiquePourcentage; }
    getDegatsWithBonus(value) { return (this.DegatsFlat + value) * this.DegatsPourcentage; }
    getSoinWithBonus(value) { return (this.SoinFlat + value) * this.SoinPourcentage; }
    getPorteeWithBonus(value) { return (this.Portee + value) * this.Portee; }
};
BonusCombat.ctorParameters = () => [
    null,
    { type: _angular_common_http__WEBPACK_IMPORTED_MODULE_3__["HttpClient"] }
];
BonusCombat = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])({
        providedIn: 'root'
    })
], BonusCombat);



/***/ }),

/***/ "./src/app/combat-session/personnage/Effect.ts":
/*!*****************************************************!*\
  !*** ./src/app/combat-session/personnage/Effect.ts ***!
  \*****************************************************/
/*! exports provided: Effect */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Effect", function() { return Effect; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm2015/http.js");
/* harmony import */ var _service_rest_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../service/rest.service */ "./src/app/service/rest.service.ts");




let Effect = class Effect {
    constructor() { return this; }
    /* ActionType : 1 => Damage, 2 => Heal, 3 => Shield, 4 => Effect */
    /* EffectType : from 1 to 21, see order and value in BonusCombat */
    /* Basically, if ActionType !== 4 the action will directly impact the reciever health/shield and EffectType will be ignored. */
    /* If ActionType === 4, an enter will be added to the effectapplied database table, and load with BonusCombat  */
    adaptFromInside(item) {
        this.IDEffectApplied = item.IDEffectApplied;
        this.ActionType = item.ActionType;
        this.EffectType = item.EffectType;
        this.EffectValueMin = item.EffectValueMin;
        this.EffectValueMax = item.EffectValueMax;
        this.ID_Competence = item.ID_Competence;
        this.IDLauncher = item.IDLauncher;
        this.IDReceiver = item.IDReceiver;
        this.NumberOfUse = item.NumberOfUse;
        this.NumberOfTurn = item.NumberOfTurn;
        this.NumberOfFight = item.NumberOfFight;
    }
    // tslint:disable:variable-name
    setEffect(ActionType, EffectType, EffectValueMin, EffectValueMax, ID_Competence, IDLauncher, IDReceiver, NumberOfUse, NumberOfTurn, NumberOfFight) {
        this.ActionType = ActionType;
        this.EffectType = EffectType;
        this.EffectValueMin = EffectValueMin;
        this.EffectValueMax = EffectValueMax;
        this.ID_Competence = ID_Competence;
        this.IDLauncher = IDLauncher;
        this.IDReceiver = IDReceiver;
        this.NumberOfUse = NumberOfUse;
        this.NumberOfTurn = NumberOfTurn;
        this.NumberOfFight = NumberOfFight;
        return this;
    }
    toString() {
        return JSON.stringify(this);
    }
    sendEffect(http) {
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_3__["BASE_URL"] + '/Classes/version_mobile/REST/addEffect.php';
        const params = new _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpParams"]().set('Effect', JSON.stringify(this));
        /* PUT is not working. Only POST don't rise error ... */
        // const requestType = this.ActionType === 5 ? 'POST' :  'PUT';
        http.request('POST', baseUrlBis, { responseType: 'text', params }).toPromise()
            .then((data) => {
            console.log(data);
        });
    }
};
Effect.ctorParameters = () => [];
Effect = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])({
        providedIn: 'root'
    })
], Effect);



/***/ }),

/***/ "./src/app/combat-session/personnage/personnage.component.scss":
/*!*********************************************************************!*\
  !*** ./src/app/combat-session/personnage/personnage.component.scss ***!
  \*********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".ally, .ally img {\n  height: 20vh;\n  width: 10vh;\n}\n\n.ally {\n  display: inline-block;\n  margin-right: 5px;\n}\n\n.borderedElement {\n  border-top: solid 1px;\n  border-bottom: solid 1px;\n  padding-bottom: 5px;\n  margin-bottom: 5px;\n}\n\n.borderNormalShot {\n  border: dashed 2px orange;\n}\n\n.borderedExplosion {\n  border: dashed 3px darkred;\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvY29tYmF0LXNlc3Npb24vcGVyc29ubmFnZS9wZXJzb25uYWdlLmNvbXBvbmVudC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0UsWUFBQTtFQUNBLFdBQUE7QUFDRjs7QUFDQTtFQUNFLHFCQUFBO0VBQ0EsaUJBQUE7QUFFRjs7QUFDQTtFQUNFLHFCQUFBO0VBQ0Esd0JBQUE7RUFDQSxtQkFBQTtFQUNBLGtCQUFBO0FBRUY7O0FBQ0E7RUFDRSx5QkFBQTtBQUVGOztBQUNBO0VBQ0UsMEJBQUE7QUFFRiIsImZpbGUiOiJzcmMvYXBwL2NvbWJhdC1zZXNzaW9uL3BlcnNvbm5hZ2UvcGVyc29ubmFnZS5jb21wb25lbnQuc2NzcyIsInNvdXJjZXNDb250ZW50IjpbIi5hbGx5LCAuYWxseSBpbWcge1xyXG4gIGhlaWdodCA6IDIwdmg7XHJcbiAgd2lkdGggOiAxMHZoO1xyXG59XHJcbi5hbGx5IHtcclxuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XHJcbiAgbWFyZ2luLXJpZ2h0OiA1cHg7XHJcbn1cclxuXHJcbi5ib3JkZXJlZEVsZW1lbnQge1xyXG4gIGJvcmRlci10b3A6IHNvbGlkIDFweDtcclxuICBib3JkZXItYm90dG9tIDogc29saWQgMXB4O1xyXG4gIHBhZGRpbmctYm90dG9tIDogNXB4O1xyXG4gIG1hcmdpbi1ib3R0b20gOiA1cHg7XHJcbn1cclxuXHJcbi5ib3JkZXJOb3JtYWxTaG90IHtcclxuICBib3JkZXIgOiBkYXNoZWQgMnB4IG9yYW5nZTtcclxufVxyXG5cclxuLmJvcmRlcmVkRXhwbG9zaW9uIHtcclxuICBib3JkZXIgOiBkYXNoZWQgM3B4IGRhcmtyZWQ7XHJcbn1cclxuIl19 */");

/***/ }),

/***/ "./src/app/combat-session/personnage/personnage.component.ts":
/*!*******************************************************************!*\
  !*** ./src/app/combat-session/personnage/personnage.component.ts ***!
  \*******************************************************************/
/*! exports provided: PersonnageComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "PersonnageComponent", function() { return PersonnageComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var rxjs_operators__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! rxjs/operators */ "./node_modules/rxjs/_esm2015/operators/index.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm2015/http.js");
/* harmony import */ var _statistiques__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./statistiques */ "./src/app/combat-session/personnage/statistiques.ts");
/* harmony import */ var _modal__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../_modal */ "./src/app/_modal/index.ts");
/* harmony import */ var _BonusCombat__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./BonusCombat */ "./src/app/combat-session/personnage/BonusCombat.ts");
/* harmony import */ var _service_statistiques_service__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../service/statistiques.service */ "./src/app/service/statistiques.service.ts");
/* harmony import */ var _service_rest_service__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../../service/rest.service */ "./src/app/service/rest.service.ts");
/* harmony import */ var _service_entities_service__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../../service/entities.service */ "./src/app/service/entities.service.ts");








// import {CompetenceIconComponent} from '../competence-icon/competence-icon.component';


let PersonnageComponent = class PersonnageComponent {
    constructor(http, vcRef, resolver, componentFactoryResolver, renderer, modalService, statistiquesService, entitiesService) {
        this.http = http;
        this.vcRef = vcRef;
        this.resolver = resolver;
        this.componentFactoryResolver = componentFactoryResolver;
        this.renderer = renderer;
        this.modalService = modalService;
        this.statistiquesService = statistiquesService;
        this.entitiesService = entitiesService;
        this.team = 0;
        this.combatSession = 1;
        this.entities = [];
    }
    ngOnInit() {
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_8__["BASE_URL"] + '/Classes/version_mobile/REST/personnageRest.php?id=' + this.Id_Personnage;
        // console.log('Récupération personnage');
        const personnageObservable = this.http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_2__["map"])((item) => this.adaptFromInside(item)));
        const personnageSuscription = personnageObservable.subscribe(() => {
            personnageSuscription.unsubscribe();
            this.getCompetencesID();
        }, (error) => { console.log('Une erreur est survenue dans la suscription: ' + error); }, () => { });
    }
    ngOnDestroy() {
    }
    adaptFromInside(item) {
        this.Id_Personnage = item.Id_Personnage;
        this.Libelle = item.Libelle;
        this.Niveau = item.Niveau;
        this.PA = item.PA;
        this.PA_Actuel = item.PA_Actuel;
        this.PM = item.PM;
        this.PM_Actuel = item.PM_Actuel;
        this.Force = item.Force;
        this.Agilite = item.Agilite;
        this.Intelligence = item.Intelligence;
        this.Vitalite = item.Vitalite;
        this.PDV_Actuel = item.PDV_Actuel;
        this.Bouclier = item.Bouclier;
        this.Ressource = item.Ressource;
        this.Ressource_Actuelle = item.Ressource_Actuelle;
        this.Type_Ressource = item.Type_Ressource;
        this.Reussite = item.Reussite;
        this.Charisme = item.Charisme;
        this.Marchandage = item.Marchandage;
        this.Intimidation = item.Intimidation;
        this.Chance = item.Chance;
        this.Inventaire = item.Inventaire;
        this.Image = item.Image;
        this.Ordre_Colorimetrique = item.Ordre_Colorimetrique;
        this.BonusForce = item.BonusForce;
        this.BonusAgilite = item.BonusAgilite;
        this.BonusIntelligence = item.BonusIntelligence;
        this.BonusVitalite = item.BonusVitalite;
        this.BonusRessource = item.BonusRessource;
        this.BonusArmure = item.BonusArmure;
        this.BonusReussite = item.BonusReussite;
        this.Statistiques = new _statistiques__WEBPACK_IMPORTED_MODULE_4__["Statistiques"](+this.Id_Personnage, +this.team, +this.Intelligence, +this.BonusIntelligence, +this.Force, +this.BonusForce, +this.Agilite, +this.BonusAgilite, +this.Vitalite, +this.BonusVitalite, +this.Ressource, +this.BonusRessource, +this.BonusArmure, +this.BonusArmure);
        this.Statistiques.bonusCombat = new _BonusCombat__WEBPACK_IMPORTED_MODULE_6__["BonusCombat"](this.Id_Personnage, this.http);
        this.statistiquesService.setStatistique(this.Statistiques);
    }
    getCompetencesID() {
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_8__["BASE_URL"] + '/Classes/version_mobile/REST/listeCompetencesAngularRest.php?id='
            + this.Id_Personnage;
        const personnageObservable = this.http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_2__["map"])((data) => data.map(item => item)));
        const personnageSuscription = personnageObservable.subscribe((value) => {
            this.CompetencesID = value;
            personnageSuscription.unsubscribe();
        }, (error) => { console.log('Une erreur est survenue dans la suscription: ' + error); }, () => { });
    }
    refreshData() {
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_8__["BASE_URL"] + '/Classes/version_mobile/REST/personnageRest.php?id=' + this.Id_Personnage;
        // console.log('Récupération personnage');
        const personnageObservable = this.http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_2__["map"])((item) => this.adaptFromInside(item)));
        const personnageSuscription = personnageObservable.subscribe(() => {
            personnageSuscription.unsubscribe();
            this.Statistiques.bonusCombat.loadItSelf();
            this.entities = this.entitiesService.getEntities(this.http, this.combatSession);
        }, (error) => { console.log('Une erreur est survenue dans la suscription: ' + error); }, () => { });
    }
    resetCombat() {
        const baseUrlBis = _service_rest_service__WEBPACK_IMPORTED_MODULE_8__["BASE_URL"] + '/Classes/version_mobile/REST/resetCombat.php?id=' + this.combatSession;
        const combatObservable = this.http.get(baseUrlBis);
        const combatSuscription = combatObservable.subscribe(() => {
            combatSuscription.unsubscribe();
            this.refreshData();
        }, (error) => { console.log('Une erreur est survenue dans la suscription: ' + error); }, () => { });
    }
};
PersonnageComponent.ctorParameters = () => [
    { type: _angular_common_http__WEBPACK_IMPORTED_MODULE_3__["HttpClient"] },
    { type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewContainerRef"] },
    { type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ComponentFactoryResolver"] },
    { type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ComponentFactoryResolver"] },
    { type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Renderer2"] },
    { type: _modal__WEBPACK_IMPORTED_MODULE_5__["ModalService"] },
    { type: _service_statistiques_service__WEBPACK_IMPORTED_MODULE_7__["StatistiquesService"] },
    { type: _service_entities_service__WEBPACK_IMPORTED_MODULE_9__["EntitiesService"] }
];
PersonnageComponent.propDecorators = {
    Id_Personnage: [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"] }]
};
PersonnageComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-personnage',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!./personnage.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/combat-session/personnage/personnage.component.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./personnage.component.scss */ "./src/app/combat-session/personnage/personnage.component.scss")).default]
    })
], PersonnageComponent);



/***/ }),

/***/ "./src/app/combat-session/personnage/statistiques.ts":
/*!***********************************************************!*\
  !*** ./src/app/combat-session/personnage/statistiques.ts ***!
  \***********************************************************/
/*! exports provided: Statistiques */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Statistiques", function() { return Statistiques; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let Statistiques = class Statistiques {
    // tslint:disable:variable-name
    constructor(Id_Personnage, team, Intelligence, BonusIntelligence, Force, BonusForce, Agilite, BonusAgilite, Vitalite, BonusVitalite, Ressource, BonusRessource, Armure, BonusArmure) {
        this.Id_Personnage = Id_Personnage;
        this.team = team;
        this.Intelligence = Intelligence;
        this.BonusIntelligence = BonusIntelligence;
        this.Force = Force;
        this.BonusForce = BonusForce;
        this.Agilite = Agilite;
        this.BonusAgilite = BonusAgilite;
        this.Vitalite = Vitalite;
        this.BonusVitalite = BonusVitalite;
        this.Ressource = Ressource;
        this.BonusRessource = BonusRessource;
        this.Armure = Armure;
        this.BonusArmure = BonusArmure;
    }
};
Statistiques.ctorParameters = () => [
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null
];
Statistiques = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])({
        providedIn: 'root'
    })
], Statistiques);



/***/ }),

/***/ "./src/app/menu/menu.component.scss":
/*!******************************************!*\
  !*** ./src/app/menu/menu.component.scss ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".main {\n  width: 100%;\n  background: #eee;\n}\n\n/*General Menu Styling*/\n\nli {\n  list-style: none;\n}\n\nli a {\n  text-decoration: none;\n  margin-left: 5px;\n}\n\n.dropdown {\n  position: absolute;\n  width: 150px;\n  top: 25px;\n  opacity: 0;\n  visibility: hidden;\n  transition: ease-out 0.35s;\n  -moz-transition: ease-out 0.35s;\n  -webkit-transition: ease-out 0.35s;\n}\n\n.li {\n  display: inline-block;\n  width: 16.5%;\n  height: 20px;\n}\n\n.mainnav li:first-child {\n  border: none;\n}\n\n.mainnav li a {\n  display: block;\n  padding: 2px 20px;\n  color: maroon;\n  font-family: arial;\n}\n\n.mainnav li:hover {\n  transition: ease-in 0.35s;\n  -moz-transition: ease-in 0.35s;\n  -webkit-transition: ease-in 0.35s;\n}\n\n.mainnav li:hover a {\n  color: maroon;\n  transition: ease-in 0.35s;\n  -moz-transition: ease-in 0.35s;\n  -webkit-transition: ease-in 0.35s;\n}\n\n/*First Level*/\n\n.subs {\n  left: -40px;\n  position: relative;\n  top: 0px;\n  width: 175px;\n  border-left: none !important;\n  border-bottom: 1px dotted #fff !important;\n  background: #eee;\n}\n\n.subs:last-child {\n  border-radius: 0 0 5px 5px;\n}\n\n.subs:last-child {\n  border: none !important;\n}\n\n.hassubs:hover .dropdown, .hassubs .hassubs:hover .dropdown {\n  opacity: 1;\n  visibility: visible;\n  transition: ease-in 0.35s;\n  -moz-transition: ease-in 0.35s;\n  -webkit-transition: ease-in 0.35s;\n}\n\n.mainnav li:hover ul a, .mainnav li:hover ul li ul li a {\n  color: #E17A63;\n}\n\n.mainnav li ul li:hover, .mainnav li ul li ul li:hover {\n  background: #fff;\n  transition: ease-in-out 0.35s;\n  -moz-transition: ease-in-out 0.35s;\n  -webkit-transition: ease-in-out 0.35s;\n}\n\n.mainnav li ul li:hover a, .mainnav li ul li ul li:hover a {\n  color: maroon;\n  transition: ease-in-out 0.35s;\n  -moz-transition: ease-in-out 0.35s;\n  -webkit-transition: ease-in-out 0.35s;\n}\n\n/*Second Level*/\n\n.hassubs .hassubs .dropdown .subs {\n  left: 25px;\n  position: relative;\n  width: 165px;\n  top: 0px;\n}\n\n.hassubs .hassubs .dropdown {\n  position: absolute;\n  width: 150px;\n  left: 120px;\n  top: 0px;\n  opacity: 0;\n  visibility: hidden;\n  transition: ease-out 0.35s;\n  -moz-transition: ease-out 0.35s;\n  -webkit-transition: ease-out 0.35s;\n}\n\n.mainnav {\n  margin: 0 auto;\n}\n\n#mainnav {\n  margin: 0 auto;\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvbWVudS9tZW51LmNvbXBvbmVudC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQU0sV0FBQTtFQUFhLGdCQUFBO0FBR25COztBQUZBLHVCQUFBOztBQUVBO0VBQUcsZ0JBQUE7QUFLSDs7QUFKQTtFQUFLLHFCQUFBO0VBQXVCLGdCQUFBO0FBUzVCOztBQVJBO0VBQVUsa0JBQUE7RUFBb0IsWUFBQTtFQUFhLFNBQUE7RUFBVyxVQUFBO0VBQVcsa0JBQUE7RUFBbUIsMEJBQUE7RUFBMEIsK0JBQUE7RUFBK0Isa0NBQUE7QUFtQjdJOztBQWpCQTtFQUFJLHFCQUFBO0VBQXdCLFlBQUE7RUFBYyxZQUFBO0FBdUIxQzs7QUF0QkE7RUFBd0IsWUFBQTtBQTBCeEI7O0FBekJBO0VBQWUsY0FBQTtFQUFlLGlCQUFBO0VBQWtCLGFBQUE7RUFBYyxrQkFBQTtBQWdDOUQ7O0FBL0JBO0VBQWtCLHlCQUFBO0VBQXlCLDhCQUFBO0VBQThCLGlDQUFBO0FBcUN6RTs7QUFwQ0E7RUFBb0IsYUFBQTtFQUFjLHlCQUFBO0VBQXlCLDhCQUFBO0VBQThCLGlDQUFBO0FBMkN6Rjs7QUExQ0EsY0FBQTs7QUFDQTtFQUFPLFdBQUE7RUFBWSxrQkFBQTtFQUFtQixRQUFBO0VBQVMsWUFBQTtFQUFhLDRCQUFBO0VBQThCLHlDQUFBO0VBQTJDLGdCQUFBO0FBb0RySTs7QUFuREE7RUFBa0IsMEJBQUE7QUF1RGxCOztBQXREQTtFQUFpQix1QkFBQTtBQTBEakI7O0FBekRBO0VBQTJELFVBQUE7RUFBVyxtQkFBQTtFQUFxQix5QkFBQTtFQUF5Qiw4QkFBQTtFQUE4QixpQ0FBQTtBQWlFbEo7O0FBaEVBO0VBQXVELGNBQUE7QUFvRXZEOztBQW5FQTtFQUFzRCxnQkFBQTtFQUFpQiw2QkFBQTtFQUE2QixrQ0FBQTtFQUFrQyxxQ0FBQTtBQTBFdEk7O0FBekVBO0VBQTBELGFBQUE7RUFBYyw2QkFBQTtFQUE2QixrQ0FBQTtFQUFrQyxxQ0FBQTtBQWdGdkk7O0FBL0VBLGVBQUE7O0FBQ0E7RUFBa0MsVUFBQTtFQUFXLGtCQUFBO0VBQW1CLFlBQUE7RUFBYSxRQUFBO0FBc0Y3RTs7QUFyRkE7RUFBNEIsa0JBQUE7RUFBbUIsWUFBQTtFQUFhLFdBQUE7RUFBWSxRQUFBO0VBQVMsVUFBQTtFQUFXLGtCQUFBO0VBQW1CLDBCQUFBO0VBQTBCLCtCQUFBO0VBQStCLGtDQUFBO0FBaUd4Szs7QUFoR0E7RUFBUyxjQUFBO0FBb0dUOztBQW5HQTtFQUFTLGNBQUE7QUF1R1QiLCJmaWxlIjoic3JjL2FwcC9tZW51L21lbnUuY29tcG9uZW50LnNjc3MiLCJzb3VyY2VzQ29udGVudCI6WyIubWFpbnt3aWR0aDogMTAwJTsgYmFja2dyb3VuZDogI2VlZTt9XHJcbi8qR2VuZXJhbCBNZW51IFN0eWxpbmcqL1xyXG5cclxubGl7bGlzdC1zdHlsZTogbm9uZTt9XHJcbmxpIGF7dGV4dC1kZWNvcmF0aW9uOiBub25lOyBtYXJnaW4tbGVmdDogNXB4fVxyXG4uZHJvcGRvd257cG9zaXRpb246IGFic29sdXRlOyB3aWR0aDogMTUwcHg7dG9wOiAyNXB4OyBvcGFjaXR5OiAwO3Zpc2liaWxpdHk6IGhpZGRlbjt0cmFuc2l0aW9uOiBlYXNlLW91dCAuMzVzOy1tb3otdHJhbnNpdGlvbjogZWFzZS1vdXQgLjM1czstd2Via2l0LXRyYW5zaXRpb246IGVhc2Utb3V0IC4zNXM7fVxyXG4vLyAubWFpbm5hdiBsaXtkaXNwbGF5OiBpbmxpbmUtYmxvY2s7cGFkZGluZzogNXB4O2JhY2tncm91bmQ6IG1hcm9vbjtib3JkZXItbGVmdDogMXB4IGRvdHRlZCAjZmZmO31cclxuLmxpe2Rpc3BsYXkgOiBpbmxpbmUtYmxvY2s7IHdpZHRoOiAxNi41JTsgaGVpZ2h0IDogMjBweH1cclxuLm1haW5uYXYgbGk6Zmlyc3QtY2hpbGR7Ym9yZGVyOiBub25lO31cclxuLm1haW5uYXYgbGkgYXsgZGlzcGxheTogYmxvY2s7cGFkZGluZzogMnB4IDIwcHg7Y29sb3I6IG1hcm9vbjtmb250LWZhbWlseTogYXJpYWw7fVxyXG4ubWFpbm5hdiBsaTpob3Zlcnt0cmFuc2l0aW9uOiBlYXNlLWluIC4zNXM7LW1vei10cmFuc2l0aW9uOiBlYXNlLWluIC4zNXM7LXdlYmtpdC10cmFuc2l0aW9uOiBlYXNlLWluIC4zNXM7fVxyXG4ubWFpbm5hdiBsaTpob3ZlciBhe2NvbG9yOiBtYXJvb247dHJhbnNpdGlvbjogZWFzZS1pbiAuMzVzOy1tb3otdHJhbnNpdGlvbjogZWFzZS1pbiAuMzVzOy13ZWJraXQtdHJhbnNpdGlvbjogZWFzZS1pbiAuMzVzO31cclxuLypGaXJzdCBMZXZlbCovXHJcbi5zdWJzIHtsZWZ0OiAtNDBweDtwb3NpdGlvbjogcmVsYXRpdmU7dG9wOiAwcHg7d2lkdGg6IDE3NXB4O2JvcmRlci1sZWZ0OiBub25lICFpbXBvcnRhbnQ7IGJvcmRlci1ib3R0b206IDFweCBkb3R0ZWQgI2ZmZiAhaW1wb3J0YW50OyBiYWNrZ3JvdW5kOiAjZWVlO31cclxuLnN1YnM6bGFzdC1jaGlsZCB7Ym9yZGVyLXJhZGl1czogMCAwIDVweCA1cHh9XHJcbi5zdWJzOmxhc3QtY2hpbGR7Ym9yZGVyOiBub25lICFpbXBvcnRhbnQ7fVxyXG4uaGFzc3Viczpob3ZlciAuZHJvcGRvd24sLmhhc3N1YnMgLmhhc3N1YnM6aG92ZXIgLmRyb3Bkb3due29wYWNpdHk6IDE7dmlzaWJpbGl0eTogdmlzaWJsZTsgdHJhbnNpdGlvbjogZWFzZS1pbiAuMzVzOy1tb3otdHJhbnNpdGlvbjogZWFzZS1pbiAuMzVzOy13ZWJraXQtdHJhbnNpdGlvbjogZWFzZS1pbiAuMzVzO31cclxuLm1haW5uYXYgbGk6aG92ZXIgdWwgYSwubWFpbm5hdiBsaTpob3ZlciB1bCBsaSB1bCBsaSBhe2NvbG9yOiAjRTE3QTYzO31cclxuLm1haW5uYXYgbGkgdWwgbGk6aG92ZXIsLm1haW5uYXYgbGkgdWwgbGkgdWwgbGk6aG92ZXJ7YmFja2dyb3VuZDogI2ZmZjt0cmFuc2l0aW9uOiBlYXNlLWluLW91dCAuMzVzOy1tb3otdHJhbnNpdGlvbjogZWFzZS1pbi1vdXQgLjM1czstd2Via2l0LXRyYW5zaXRpb246IGVhc2UtaW4tb3V0IC4zNXM7fVxyXG4ubWFpbm5hdiBsaSB1bCBsaTpob3ZlciBhLC5tYWlubmF2IGxpIHVsIGxpIHVsIGxpOmhvdmVyIGF7Y29sb3I6IG1hcm9vbjt0cmFuc2l0aW9uOiBlYXNlLWluLW91dCAuMzVzOy1tb3otdHJhbnNpdGlvbjogZWFzZS1pbi1vdXQgLjM1czstd2Via2l0LXRyYW5zaXRpb246IGVhc2UtaW4tb3V0IC4zNXM7fVxyXG4vKlNlY29uZCBMZXZlbCovXHJcbi5oYXNzdWJzIC5oYXNzdWJzIC5kcm9wZG93biAuc3Vic3tsZWZ0OiAyNXB4O3Bvc2l0aW9uOiByZWxhdGl2ZTt3aWR0aDogMTY1cHg7dG9wOiAwcHg7fVxyXG4uaGFzc3VicyAuaGFzc3VicyAuZHJvcGRvd257cG9zaXRpb246IGFic29sdXRlO3dpZHRoOiAxNTBweDtsZWZ0OiAxMjBweDt0b3A6IDBweDtvcGFjaXR5OiAwO3Zpc2liaWxpdHk6IGhpZGRlbjt0cmFuc2l0aW9uOiBlYXNlLW91dCAuMzVzOy1tb3otdHJhbnNpdGlvbjogZWFzZS1vdXQgLjM1czstd2Via2l0LXRyYW5zaXRpb246IGVhc2Utb3V0IC4zNXM7fVxyXG4ubWFpbm5hdnttYXJnaW46IDAgYXV0b31cclxuI21haW5uYXZ7bWFyZ2luOiAwIGF1dG99XHJcbiJdfQ== */");

/***/ }),

/***/ "./src/app/menu/menu.component.ts":
/*!****************************************!*\
  !*** ./src/app/menu/menu.component.ts ***!
  \****************************************/
/*! exports provided: MenuComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "MenuComponent", function() { return MenuComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let MenuComponent = class MenuComponent {
    constructor() { }
    ngOnInit() {
    }
};
MenuComponent.ctorParameters = () => [];
MenuComponent = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-menu',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!./menu.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/menu/menu.component.html")).default,
        styles: [Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! ./menu.component.scss */ "./src/app/menu/menu.component.scss")).default]
    })
], MenuComponent);



/***/ }),

/***/ "./src/app/modal-focus/modal-focus.module.ts":
/*!***************************************************!*\
  !*** ./src/app/modal-focus/modal-focus.module.ts ***!
  \***************************************************/
/*! exports provided: NgbdModalFocusModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "NgbdModalFocusModule", function() { return NgbdModalFocusModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm2015/platform-browser.js");
/* harmony import */ var _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @ng-bootstrap/ng-bootstrap */ "./node_modules/@ng-bootstrap/ng-bootstrap/fesm2015/ng-bootstrap.js");
/* harmony import */ var _modal_focus__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./modal-focus */ "./src/app/modal-focus/modal-focus.ts");





let NgbdModalFocusModule = class NgbdModalFocusModule {
};
NgbdModalFocusModule = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_platform_browser__WEBPACK_IMPORTED_MODULE_2__["BrowserModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_3__["NgbModule"]],
        declarations: [_modal_focus__WEBPACK_IMPORTED_MODULE_4__["NgbdModalFocus"], _modal_focus__WEBPACK_IMPORTED_MODULE_4__["NgbdModalConfirm"], _modal_focus__WEBPACK_IMPORTED_MODULE_4__["NgbdModalConfirmAutofocus"]],
        exports: [_modal_focus__WEBPACK_IMPORTED_MODULE_4__["NgbdModalFocus"]],
        bootstrap: [_modal_focus__WEBPACK_IMPORTED_MODULE_4__["NgbdModalFocus"]],
        entryComponents: [_modal_focus__WEBPACK_IMPORTED_MODULE_4__["NgbdModalConfirm"], _modal_focus__WEBPACK_IMPORTED_MODULE_4__["NgbdModalConfirmAutofocus"], _modal_focus__WEBPACK_IMPORTED_MODULE_4__["NgbdModalFocus"]]
    })
], NgbdModalFocusModule);



/***/ }),

/***/ "./src/app/modal-focus/modal-focus.ts":
/*!********************************************!*\
  !*** ./src/app/modal-focus/modal-focus.ts ***!
  \********************************************/
/*! exports provided: NgbdModalConfirm, NgbdModalConfirmAutofocus, NgbdModalFocus */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "NgbdModalConfirm", function() { return NgbdModalConfirm; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "NgbdModalConfirmAutofocus", function() { return NgbdModalConfirmAutofocus; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "NgbdModalFocus", function() { return NgbdModalFocus; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @ng-bootstrap/ng-bootstrap */ "./node_modules/@ng-bootstrap/ng-bootstrap/fesm2015/ng-bootstrap.js");



let NgbdModalConfirm = class NgbdModalConfirm {
    constructor(modal) {
        this.modal = modal;
    }
};
NgbdModalConfirm.ctorParameters = () => [
    { type: _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_2__["NgbActiveModal"] }
];
NgbdModalConfirm.propDecorators = {
    modalTitle: [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"] }],
    modalContent: [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"] }]
};
NgbdModalConfirm = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'ngbd-modal-confirm',
        template: `
  <div class="modal-header">
    <h4 class="modal-title" id="modal-title" [innerHTML]="modalTitle"></h4>
    <button type="button" class="close" aria-describedby="modal-title" (click)="modal.dismiss('Cross click')">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body" [innerHTML]="modalContent">
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-outline-secondary" (click)="modal.dismiss('cancel click')">Cancel</button>
    <button type="button" class="btn btn-danger" (click)="modal.close('Ok click')">Ok</button>
  </div>
  `
    })
], NgbdModalConfirm);

let NgbdModalConfirmAutofocus = class NgbdModalConfirmAutofocus {
    constructor(modal) {
        this.modal = modal;
    }
};
NgbdModalConfirmAutofocus.ctorParameters = () => [
    { type: _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_2__["NgbActiveModal"] }
];
NgbdModalConfirmAutofocus.propDecorators = {
    modalTitle: [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"] }],
    modalContent: [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"] }]
};
NgbdModalConfirmAutofocus = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'ngbd-modal-confirm-autofocus',
        template: `
  <div class="modal-header">
    <h4 class="modal-title" id="modal-title" [innerHTML]="modalTitle"></h4>
    <button type="button" class="close" aria-label="Close button" aria-describedby="modal-title" (click)="modal.dismiss('Cross click')">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body" [innerHTML]="modalContent">
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-outline-secondary" (click)="modal.dismiss('cancel click')">Cancel</button>
    <button type="button" ngbAutofocus class="btn btn-primary" (click)="modal.close('Ok click')">Ok</button>
  </div>
  `
    })
], NgbdModalConfirmAutofocus);

const MODALS = {
    focusFirst: NgbdModalConfirm,
    autofocus: NgbdModalConfirmAutofocus
};
let NgbdModalFocus = class NgbdModalFocus {
    constructor(_modalService) {
        this._modalService = _modalService;
        this.withAutofocus = `<button type="button" ngbAutofocus class="btn btn-danger"
      (click)="modal.close('Ok click')">Ok</button>`;
    }
    open(name) {
        this._modalService.open(MODALS[name]);
    }
};
NgbdModalFocus.ctorParameters = () => [
    { type: _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_2__["NgbModal"] }
];
NgbdModalFocus = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'ngbd-modal-focus',
        template: Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"])(__webpack_require__(/*! raw-loader!./modal-focus.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/modal-focus/modal-focus.html")).default
    })
], NgbdModalFocus);



/***/ }),

/***/ "./src/app/safe.pipe.ts":
/*!******************************!*\
  !*** ./src/app/safe.pipe.ts ***!
  \******************************/
/*! exports provided: SafePipe */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SafePipe", function() { return SafePipe; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm2015/platform-browser.js");



/*
Coming from https://medium.com/@swarnakishore/angular-safe-pipe-implementation-to-bypass-domsanitizer-stripping-out-content-c1bf0f1cc36b
I had a problem from Tab and EffectAddCompetenceEffectService, for displaying effectCompetence in the effectCompetence creation managing system.
I wanted to show on a Popover some table with html & (onclick) content, to display properly 37 and 38 options.
So I needed to do a Tab, and pre configure it, then send the final html as string to the propover.
But I had to disable sanitizing HTML to display properly all html tags and  all called JS functions.
 */
let SafePipe = class SafePipe {
    constructor(sanitizer) {
        this.sanitizer = sanitizer;
    }
    transform(value, type) {
        switch (type) {
            case 'html': return this.sanitizer.bypassSecurityTrustHtml(value);
            case 'style': return this.sanitizer.bypassSecurityTrustStyle(value);
            case 'script': return this.sanitizer.bypassSecurityTrustScript(value);
            case 'url': return this.sanitizer.bypassSecurityTrustUrl(value);
            case 'resourceUrl': return this.sanitizer.bypassSecurityTrustResourceUrl(value);
            default: throw new Error(`Invalid safe type specified: ${type}`);
        }
    }
};
SafePipe.ctorParameters = () => [
    { type: _angular_platform_browser__WEBPACK_IMPORTED_MODULE_2__["DomSanitizer"] }
];
SafePipe = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Pipe"])({
        name: 'safe'
    })
], SafePipe);



/***/ }),

/***/ "./src/app/service/effect-add-competence-effect.service.ts":
/*!*****************************************************************!*\
  !*** ./src/app/service/effect-add-competence-effect.service.ts ***!
  \*****************************************************************/
/*! exports provided: EffectAddCompetenceEffectService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "EffectAddCompetenceEffectService", function() { return EffectAddCompetenceEffectService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm2015/http.js");
/* harmony import */ var _rest_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./rest.service */ "./src/app/service/rest.service.ts");
/* harmony import */ var rxjs_operators__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! rxjs/operators */ "./node_modules/rxjs/_esm2015/operators/index.js");
/* harmony import */ var _type_effect__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./type-effect */ "./src/app/service/type-effect.ts");
/* harmony import */ var _tab__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./tab */ "./src/app/service/tab.ts");







let EffectAddCompetenceEffectService = class EffectAddCompetenceEffectService {
    constructor(http) {
        this.http = http;
        this.ActionType = [];
        this.EffectType = [];
        this.ApplicationType = [];
    }
    getActionType() {
        return this.ActionType;
    }
    getEffectType() {
        return this.EffectType;
    }
    setActionType(actionType) {
        this.ActionType = actionType;
    }
    setEffectType(effectType) {
        this.EffectType = effectType;
    }
    loadActionType(http) {
        this.ActionType = [];
        const baseUrlBis = _rest_service__WEBPACK_IMPORTED_MODULE_3__["BASE_URL"] + '/Classes/version_mobile/REST/actionTypeNames.php';
        const actionTypeObservable = http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_4__["map"])((data) => data.map(item => item)));
        const actionTypeSuscription = actionTypeObservable.subscribe((value) => {
            for (const val of value) {
                const newEffect = new _type_effect__WEBPACK_IMPORTED_MODULE_5__["TypeEffect"]();
                newEffect.adaptFromInside(val);
                this.ActionType.push(newEffect);
            }
            actionTypeSuscription.unsubscribe();
        }, (error) => {
            console.log('Une erreur est survenue dans la suscription: ' + error);
        }, () => {
        });
    }
    loadEffectType(http) {
        this.EffectType = [];
        const baseUrlBis = _rest_service__WEBPACK_IMPORTED_MODULE_3__["BASE_URL"] + '/Classes/version_mobile/REST/effectTypeNames.php';
        const effectTypeObservable = http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_4__["map"])((data) => data.map(item => item)));
        const effectTypeSuscription = effectTypeObservable.subscribe((value) => {
            for (const val of value) {
                const newEffect = new _type_effect__WEBPACK_IMPORTED_MODULE_5__["TypeEffect"]();
                newEffect.adaptFromInside(val);
                this.EffectType.push(newEffect);
            }
            effectTypeSuscription.unsubscribe();
        }, (error) => {
            console.log('Une erreur est survenue dans la suscription: ' + error);
        }, () => {
        });
    }
    loadApplicationType(http) {
        this.ApplicationType = [];
        const baseUrlBis = _rest_service__WEBPACK_IMPORTED_MODULE_3__["BASE_URL"] + '/Classes/version_mobile/REST/applicationTypeNames.php';
        const applicationTypeObservable = http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_4__["map"])((data) => data.map(item => item)));
        const applicationTypeSubscription = applicationTypeObservable.subscribe((value) => {
            for (const val of value) {
                const newEffect = new _type_effect__WEBPACK_IMPORTED_MODULE_5__["TypeEffect"]();
                newEffect.adaptFromInside(val);
                this.ApplicationType.push(newEffect);
            }
            applicationTypeSubscription.unsubscribe();
        }, (error) => {
            console.log('Une erreur est survenue dans la suscription: ' + error);
        }, () => {
        });
    }
    loadService(http) {
        this.loadActionType(http);
        this.loadEffectType(http);
        this.loadApplicationType(http);
    }
    getTableActionTypeForPopover() {
        const tab = new _tab__WEBPACK_IMPORTED_MODULE_6__["Tab"]();
        tab.addTabMenuItem('Base');
        let base = '';
        tab.addTabMenuItem('Effets Avant Lancement');
        let effetsAvantLancement = '';
        tab.addTabMenuItem('Effets Après Lancement');
        let effetsApresLancement = '';
        tab.addTabMenuItem('Effets Avant Reception');
        let effetsAvantReception = '';
        tab.addTabMenuItem('Effets Après Reception');
        let effetsApresReception = '';
        tab.addTabMenuItem('Autres Effets');
        let autresEffets = '';
        for (let index = 0; index < this.ActionType.length; index++) {
            if (index < 6) {
                base += this.ActionType[index].idType + ' : ' + this.ActionType[index].name + '<br/>';
            }
            else if (index > 6 && index < 21) {
                if (index % 2 === 1) {
                    effetsAvantLancement += this.ActionType[index].idType + ' : ' + this.ActionType[index].name + '<br/>';
                }
                else {
                    effetsApresLancement += this.ActionType[index].idType + ' : ' + this.ActionType[index].name + '<br/>';
                }
            }
            else if (index > 20 && index < 35) {
                if (index % 2 === 1) {
                    effetsAvantReception += this.ActionType[index].idType + ' : ' + this.ActionType[index].name + '<br/>';
                }
                else {
                    effetsApresReception += this.ActionType[index].idType + ' : ' + this.ActionType[index].name + '<br/>';
                }
            }
            else if (index > 34 || index === 6) {
                autresEffets += this.ActionType[index].idType + ' : ' + this.ActionType[index].name + '<br/>';
            }
        }
        tab.addTabContentItem(base);
        tab.addTabContentItem(effetsAvantLancement);
        tab.addTabContentItem(effetsApresLancement);
        tab.addTabContentItem(effetsAvantReception);
        tab.addTabContentItem(effetsApresReception);
        tab.addTabContentItem(autresEffets);
        // console.log(tab.displayTab());
        return tab.displayTab();
    }
    getTableEffectTypeForPopover() {
        const tab = new _tab__WEBPACK_IMPORTED_MODULE_6__["Tab"]();
        tab.addTabMenuItem('Dégâts');
        let degats = '';
        tab.addTabMenuItem('Statistiques');
        let statistiques = '';
        tab.addTabMenuItem('Résistance');
        let resistance = '';
        tab.addTabMenuItem('Soin');
        let soin = '';
        tab.addTabMenuItem('Effets Directs');
        let effetsDirects = '';
        tab.addTabMenuItem('Autres');
        let autres = '';
        for (let index = 0; index < this.EffectType.length; index++) {
            if (index < 6) { // index est décalé de 1. Il faut prendre index-1 pour avoir le bon numéro
                degats += this.EffectType[index].idType + ' : ' + this.EffectType[index].name + '<br/>';
            }
            else if ((index > 5 && index < 12) || index === 33) {
                statistiques += this.EffectType[index].idType + ' : ' + this.EffectType[index].name + '<br/>';
            }
            else if (index > 13 && index < 20) {
                resistance += this.EffectType[index].idType + ' : ' + this.EffectType[index].name + '<br/>';
            }
            else if (index > 19 && index < 24) {
                soin += this.EffectType[index].idType + ' : ' + this.EffectType[index].name + '<br/>';
            }
            else if ((index > 23 && index < 33) || index === 12 || index === 13) {
                autres += this.EffectType[index].idType + ' : ' + this.EffectType[index].name + '<br/>';
            }
            else if (index > 32) {
                effetsDirects += this.EffectType[index].idType + ' : ' + this.EffectType[index].name + '<br/>';
            }
        }
        tab.addTabContentItem(degats);
        tab.addTabContentItem(statistiques);
        tab.addTabContentItem(resistance);
        tab.addTabContentItem(soin);
        tab.addTabContentItem(effetsDirects);
        tab.addTabContentItem(autres);
        // console.log(tab.displayTab());
        return tab.displayTab();
    }
    getTableApplicationTypeForPopover() {
        const tab = new _tab__WEBPACK_IMPORTED_MODULE_6__["Tab"]();
        tab.addTabMenuItem('Cible unique');
        let cibleUnique = '';
        tab.addTabMenuItem('Effet de Zone');
        let effetZone = '';
        tab.addTabMenuItem('Effet sur Précédente cible');
        let effetPrecedenteCible = '';
        tab.addTabMenuItem('Autres');
        let autres = '';
        for (let index = 0; index < this.ApplicationType.length; index++) {
            if (index === 0 || index === 4 || index === 5) { // index est décalé de 1. Il faut prendre index-1 pour avoir le bon numéro
                autres += this.ApplicationType[index].idType + ' : ' + this.ApplicationType[index].name + '<br/>';
            }
            else if ((index > 5 && index < 12) || index === 1) {
                cibleUnique += this.ApplicationType[index].idType + ' : ' + this.ApplicationType[index].name + '<br/>';
            }
            else if ((index > 11 && index < 18) || index === 2) {
                effetZone += this.ApplicationType[index].idType + ' : ' + this.ApplicationType[index].name + '<br/>';
            }
            else if ((index > 17 && index < 22) || index === 3) {
                effetPrecedenteCible += this.ApplicationType[index].idType + ' : ' + this.ApplicationType[index].name + '<br/>';
            }
        }
        tab.addTabContentItem(cibleUnique);
        tab.addTabContentItem(effetZone);
        tab.addTabContentItem(effetPrecedenteCible);
        tab.addTabContentItem(autres);
        // console.log(tab.displayTab());
        return tab.displayTab();
    }
    updateOrCreateCompetenceEffect() {
        const values = {
            idCompetenceEffect: undefined,
            effectOrder: undefined,
            idCompetence: undefined,
            effectType: undefined,
            actionType: undefined,
            niveauRequis: undefined,
            typeCalcul: undefined,
            calcul1A: undefined,
            calcul1B: undefined,
            calcul2A: undefined,
            calcul2B: undefined,
            amplitude: undefined,
            nombreAmplitude: undefined,
            statistique1: undefined,
            statistique2: undefined,
            pourcentage: undefined,
            numberOfUse: undefined,
            numberOfTurn: undefined,
            numberOfFight: undefined,
        };
        // tslint:disable:max-line-length
        values.idCompetenceEffect = +this.competenceAddEffectCompetenceComponent.idEffect;
        values.effectOrder = +document.getElementById('validationEffectOrder').value;
        values.idCompetence = +this.competenceAddEffectCompetenceComponent.idCompetence;
        values.effectType = document.getElementById('validationEffectType') === null ? null : +document.getElementById('validationEffectType').value;
        values.actionType = +document.getElementById('validationActionType').value;
        values.niveauRequis = +document.getElementById('validationNiveauRequis').value;
        values.typeCalcul = +document.getElementById('validationTypeCalcul').value;
        values.calcul1A = +document.getElementById('validationCalcul1A').value;
        values.calcul1B = +document.getElementById('validationCalcul1B').value;
        values.calcul2A = document.getElementById('validationCalcul2A') === null ? null : +document.getElementById('validationCalcul2A').value;
        values.calcul2B = document.getElementById('validationCalcul2B') === null ? null : +document.getElementById('validationCalcul2B').value;
        values.amplitude = +document.getElementById('validationAmplitude').value;
        values.nombreAmplitude = +document.getElementById('validationNombreAmplitude').value;
        values.statistique1 = document.getElementById('validationStatistique1').value;
        values.statistique2 = document.getElementById('validationStatistique2') === null ? null : document.getElementById('validationStatistique2').value;
        values.pourcentage = document.getElementById('validationPoucentage').checked ? 1 : 0;
        values.numberOfUse = document.getElementById('validationNumberOfUse') === null ? null : +document.getElementById('validationNumberOfUse').value;
        values.numberOfTurn = document.getElementById('validationNumberOfTurn') === null ? null : +document.getElementById('validationNumberOfTurn').value;
        values.numberOfFight = document.getElementById('validationNumberOfFight') === null ? null : +document.getElementById('validationNumberOfFight').value;
        const baseUrlBis = _rest_service__WEBPACK_IMPORTED_MODULE_3__["BASE_URL"] + '/Classes/version_mobile/REST/addCompetenceEffect.php';
        const params = new _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpParams"]().set('EffectCompetence', JSON.stringify(values));
        // console.log(JSON.stringify(values));
        // console.log(params);
        /* PUT is not working. Only POST don't rise error ... */
        // const requestType = this.ActionType === 5 ? 'POST' :  'PUT';
        this.http.request('POST', baseUrlBis, { responseType: 'text', params }).toPromise()
            .then((data) => {
            this.competenceAddEffectCompetenceComponent.getEffects();
        });
    }
    deleteEffect(idCompetenceEffect) {
        const values = { idCompetenceEffect: undefined };
        values.idCompetenceEffect = idCompetenceEffect;
        const baseUrlBis = _rest_service__WEBPACK_IMPORTED_MODULE_3__["BASE_URL"] + '/Classes/version_mobile/REST/addCompetenceEffect.php';
        const params = new _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpParams"]().set('EffectCompetence', JSON.stringify(values));
        console.log(JSON.stringify(values));
        console.log(params);
        this.http.request('DELETE', baseUrlBis, { responseType: 'text', params }).toPromise()
            .then((data) => {
            console.log(data);
            this.competenceAddEffectCompetenceComponent.getEffects();
        });
    }
    addCompetenceToCharacter(competenceName) {
        const values = { competenceName: undefined, idPersonnage: undefined };
        values.competenceName = competenceName;
        values.idPersonnage = this.personnageAddEffectCompetenceComponent.idPersonnage;
        const baseUrlBis = _rest_service__WEBPACK_IMPORTED_MODULE_3__["BASE_URL"] + '/Classes/version_mobile/REST/addCompetence.php';
        const params = new _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpParams"]().set('Competence', JSON.stringify(values));
        console.log(JSON.stringify(values));
        console.log(params);
        /* PUT is not working. Only POST don't rise error ... */
        // const requestType = this.ActionType === 5 ? 'POST' :  'PUT';
        return this.http.request('PUT', baseUrlBis, { responseType: 'text', params }).toPromise();
    }
    deleteCompetence(idCompetence, idPersonnage) {
        const values = { idCompetence: undefined, idPersonnage: undefined };
        values.idCompetence = idCompetence;
        values.idPersonnage = idPersonnage;
        const baseUrlBis = _rest_service__WEBPACK_IMPORTED_MODULE_3__["BASE_URL"] + '/Classes/version_mobile/REST/addCompetence.php';
        const params = new _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpParams"]().set('Competence', JSON.stringify(values));
        console.log(JSON.stringify(values));
        console.log(params);
        this.http.request('DELETE', baseUrlBis, { responseType: 'text', params }).toPromise()
            .then((data) => {
            console.log(data);
            this.addEffectCompetenceComponent.reloadCompetences();
        });
    }
};
EffectAddCompetenceEffectService.ctorParameters = () => [
    { type: _angular_common_http__WEBPACK_IMPORTED_MODULE_2__["HttpClient"] }
];
EffectAddCompetenceEffectService = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])({
        providedIn: 'root'
    })
], EffectAddCompetenceEffectService);



/***/ }),

/***/ "./src/app/service/entities.service.ts":
/*!*********************************************!*\
  !*** ./src/app/service/entities.service.ts ***!
  \*********************************************/
/*! exports provided: EntitiesService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "EntitiesService", function() { return EntitiesService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _rest_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./rest.service */ "./src/app/service/rest.service.ts");
/* harmony import */ var rxjs_operators__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! rxjs/operators */ "./node_modules/rxjs/_esm2015/operators/index.js");




let EntitiesService = class EntitiesService {
    constructor() {
        this.entities = [];
    }
    getEntities(http, combatSession) {
        const baseUrlBis = _rest_service__WEBPACK_IMPORTED_MODULE_2__["BASE_URL"] + '/Classes/version_mobile/REST/combatEntitiesRest.php?id='
            + combatSession;
        const personnageIconObservable = http.get(baseUrlBis).pipe(
        // Adapt each item in the raw data array
        Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_3__["map"])((data) => data.map(item => item)));
        const personnageIconSuscription = personnageIconObservable.subscribe((value) => {
            this.entities = value;
            personnageIconSuscription.unsubscribe();
        }, (error) => { console.log('Une erreur est survenue dans la suscription: ' + error); }, () => { });
        return this.entities;
    }
};
EntitiesService.ctorParameters = () => [];
EntitiesService = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])({
        providedIn: 'root'
    })
], EntitiesService);



/***/ }),

/***/ "./src/app/service/rest.service.ts":
/*!*****************************************!*\
  !*** ./src/app/service/rest.service.ts ***!
  \*****************************************/
/*! exports provided: BASE_URL */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "BASE_URL", function() { return BASE_URL; });
let BASE_URL = 'https://baichoo.fr';


/***/ }),

/***/ "./src/app/service/statistiques.service.ts":
/*!*************************************************!*\
  !*** ./src/app/service/statistiques.service.ts ***!
  \*************************************************/
/*! exports provided: StatistiquesService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "StatistiquesService", function() { return StatistiquesService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let StatistiquesService = class StatistiquesService {
    constructor() { }
    setStatistique(statistiques) {
        this.statistiques = statistiques;
    }
    getStatistique() {
        return this.statistiques;
    }
    clearService() {
        this.statistiques = undefined;
    }
};
StatistiquesService.ctorParameters = () => [];
StatistiquesService = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])({
        providedIn: 'root'
    })
], StatistiquesService);



/***/ }),

/***/ "./src/app/service/tab.ts":
/*!********************************!*\
  !*** ./src/app/service/tab.ts ***!
  \********************************/
/*! exports provided: Tab */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Tab", function() { return Tab; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let Tab = class Tab {
    constructor() {
        this.tabMenuItem = [];
        this.tabContentItem = [];
    }
    addTabMenuItem(tab) {
        this.tabMenuItem.push(tab);
    }
    addTabContentItem(tabContent) {
        this.tabContentItem.push(tabContent);
    }
    /**
     * Note for my future myself.
     * I divided class of the button and div because I wanted to initialize it with first option active.
     * I wanted that because if not, the size of the Popover change after the first click,
     * => At initialization, all div are 'display: none'.
     * The consequence is -> The popover wasn't centered.
     * That's a bit ugly, but functional so, it's ok.
     */
    displayTab() {
        let tab = '';
        if (this.tabMenuItem.length === this.tabContentItem.length) {
            tab += '<div class="tab">';
            for (let index = 0; index < this.tabMenuItem.length; index++) {
                tab += '<button type="button" onclick="openCity(event, \'' + this.tabMenuItem[index] + '\')"';
                tab += index === 0 ? 'class="tablinks active" >' : 'class="tablinks" >';
                tab += this.tabMenuItem[index] + ' </button>';
            }
            tab += '</div>';
            for (let index = 0; index < this.tabContentItem.length; index++) {
                tab += '<div id="' + this.tabMenuItem[index] + '" class="tabcontent"';
                tab += index === 0 ? 'style="display : block">' : '>';
                tab += '<h6>' + this.tabMenuItem[index] + '</h6>';
                tab += '<p>' + this.tabContentItem[index] + '</p>';
                tab += '</div>';
            }
        }
        return tab;
    }
};
Tab.ctorParameters = () => [];
Tab = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])({
        providedIn: 'root'
    })
], Tab);



/***/ }),

/***/ "./src/app/service/type-effect.ts":
/*!****************************************!*\
  !*** ./src/app/service/type-effect.ts ***!
  \****************************************/
/*! exports provided: TypeEffect */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "TypeEffect", function() { return TypeEffect; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let TypeEffect = class TypeEffect {
    constructor() { }
    adaptFromInside(item) {
        this.idType = item.idType;
        this.name = item.name;
    }
};
TypeEffect.ctorParameters = () => [];
TypeEffect = Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"])([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])({
        providedIn: 'root'
    })
], TypeEffect);



/***/ }),

/***/ "./src/environments/environment.ts":
/*!*****************************************!*\
  !*** ./src/environments/environment.ts ***!
  \*****************************************/
/*! exports provided: environment */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "environment", function() { return environment; });
// This file can be replaced during build by using the `fileReplacements` array.
// `ng build --prod` replaces `environment.ts` with `environment.prod.ts`.
// The list of file replacements can be found in `angular.json`.
const environment = {
    production: false
};
/*
 * For easier debugging in development mode, you can import the following file
 * to ignore zone related error stack frames such as `zone.run`, `zoneDelegate.invokeTask`.
 *
 * This import should be commented out in production mode because it will have a negative impact
 * on performance if an error is thrown.
 */
// import 'zone.js/dist/zone-error';  // Included with Angular CLI.


/***/ }),

/***/ "./src/main.ts":
/*!*********************!*\
  !*** ./src/main.ts ***!
  \*********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_platform_browser_dynamic__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/platform-browser-dynamic */ "./node_modules/@angular/platform-browser-dynamic/fesm2015/platform-browser-dynamic.js");
/* harmony import */ var _app_app_module__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./app/app.module */ "./src/app/app.module.ts");
/* harmony import */ var _environments_environment__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./environments/environment */ "./src/environments/environment.ts");
/* harmony import */ var _app_modal_focus_modal_focus_module__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./app/modal-focus/modal-focus.module */ "./src/app/modal-focus/modal-focus.module.ts");





if (_environments_environment__WEBPACK_IMPORTED_MODULE_3__["environment"].production) {
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["enableProdMode"])();
}
Object(_angular_platform_browser_dynamic__WEBPACK_IMPORTED_MODULE_1__["platformBrowserDynamic"])().bootstrapModule(_app_app_module__WEBPACK_IMPORTED_MODULE_2__["AppModule"])
    .catch(err => console.error(err));
Object(_angular_platform_browser_dynamic__WEBPACK_IMPORTED_MODULE_1__["platformBrowserDynamic"])()
    .bootstrapModule(_app_modal_focus_modal_focus_module__WEBPACK_IMPORTED_MODULE_4__["NgbdModalFocusModule"])
    .then(ref => {
    // Ensure Angular destroys itself on hot reloads.
    if (window['ngRef']) {
        window['ngRef'].destroy();
    }
    window['ngRef'] = ref;
    // Otherwise, log the boot error
})
    .catch(err => console.error(err));


/***/ }),

/***/ 0:
/*!***************************!*\
  !*** multi ./src/main.ts ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\wamp64\www\AngularRP\src\main.ts */"./src/main.ts");


/***/ })

},[[0,"runtime","vendor"]]]);
//# sourceMappingURL=main.js.map