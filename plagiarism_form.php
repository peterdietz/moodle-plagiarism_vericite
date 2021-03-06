<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

require_once($CFG->dirroot.'/lib/formslib.php');

class plagiarism_setup_form extends moodleform {

    // Define the form.
    function definition () {
        global $CFG;

        $choices = array('No','Yes');

        $mform =& $this->_form;
        $mform->addElement('html', get_string('vericiteexplain', 'plagiarism_vericite'));
        $mform->addElement('checkbox', 'vericite_use', get_string('usevericite', 'plagiarism_vericite'));

        $mform->addElement('textarea', 'vericite_student_disclosure', get_string('studentdisclosure','plagiarism_vericite'),'wrap="virtual" rows="6" cols="50"');
        $mform->addHelpButton('vericite_student_disclosure', 'studentdisclosure', 'plagiarism_vericite');
        $mform->setDefault('vericite_student_disclosure', get_string('studentdisclosuredefault','plagiarism_vericite'));

        $mform->addElement('text', 'vericite_accountid', get_string('vericiteaccountid', 'plagiarism_vericite'));
        $mform->addHelpButton('vericite_accountid', 'vericiteaccountid', 'plagiarism_vericite');
        $mform->addRule('vericite_accountid', null, 'required', null, 'client');
        $mform->setType('vericite_accountid', PARAM_TEXT);

        $mform->addElement('passwordunmask', 'vericite_secretkey', get_string('vericitesecretkey', 'plagiarism_vericite'));
        $mform->addHelpButton('vericite_secretkey', 'vericitesecretkey', 'plagiarism_vericite');
        $mform->addRule('vericite_secretkey', null, 'required', null, 'client');

        $mform->addElement('text', 'vericite_api', get_string('vericiteapi', 'plagiarism_vericite'));
        $mform->addHelpButton('vericite_api', 'vericiteapi', 'plagiarism_vericite');
        $mform->addRule('vericite_api', null, 'required', null, 'client');
        $mform->setType('vericite_api', PARAM_URL);

        $mform->addElement('html', get_string('advanced_settings', 'plagiarism_vericite') . "<br/>");

        $mform->addElement('checkbox', 'vericite_disable_dynamic_inline', get_string('disable_dynamic_inline', 'plagiarism_vericite'));
        $mform->addHelpButton('vericite_disable_dynamic_inline', 'disable_dynamic_inline', 'plagiarism_vericite');
        $mform->addElement('checkbox', 'vericite_enable_debugging', get_string('enable_debugging', 'plagiarism_vericite'));
        $mform->addHelpButton('vericite_enable_debugging', 'enable_debugging', 'plagiarism_vericite');

        $mform->addElement('html', get_string('vericitedefaultsettings', 'plagiarism_vericite') . "<br/>");

        $mform->addElement('checkbox', 'vericite_use_default', get_string('usevericite', 'plagiarism_vericite'));
        $mform->addHelpButton('vericite_use_default', 'usevericite', 'plagiarism_vericite');

        $mform->addElement('checkbox', 'vericite_student_score_default', get_string('studentscorevericite', 'plagiarism_vericite'));
        $mform->addHelpButton('vericite_student_score_default', 'studentscorevericite', 'plagiarism_vericite');
        $mform->setDefault('vericite_student_score_default', true);

        $mform->addElement('checkbox', 'vericite_student_report_default', get_string('studentreportvericite', 'plagiarism_vericite'));
        $mform->addHelpButton('vericite_student_report_default', 'studentreportvericite', 'plagiarism_vericite');
        $mform->setDefault('vericite_student_report_default', true);

        $mform->addElement('checkbox', 'vericite_exclude_quotes_default', get_string('excludequotesvericite', 'plagiarism_vericite'));
        $mform->addHelpButton('vericite_exclude_quotes_default', 'excludequotesvericite', 'plagiarism_vericite');
        $mform->setDefault('vericite_exclude_quotes_default', true);

        $mform->addElement('checkbox', 'vericite_exclude_self_plag_default', get_string('excludeselfplagvericite', 'plagiarism_vericite'));
        $mform->addHelpButton('vericite_exclude_self_plag_default', 'excludeselfplagvericite', 'plagiarism_vericite');
        $mform->setDefault('vericite_exclude_self_plag_default', true);

        $mform->addElement('checkbox', 'vericite_store_inst_index_default', get_string('storeinstindexvericite', 'plagiarism_vericite'));
        $mform->addHelpButton('vericite_store_inst_index_default', 'storeinstindexvericite', 'plagiarism_vericite');
        $mform->setDefault('vericite_store_inst_index_default', true);

        $mform->addElement('html', get_string('vericitedefaultsettingsforums', 'plagiarism_vericite') . "<br/>");

        $mform->addElement('checkbox', 'vericite_student_score_default_forums', get_string('studentscorevericite', 'plagiarism_vericite'));
        $mform->addHelpButton('vericite_student_score_default_forums', 'studentscorevericite', 'plagiarism_vericite');
        $mform->setDefault('vericite_student_score_default_forums', true);

        $mform->addElement('checkbox', 'vericite_student_report_default_forums', get_string('studentreportvericite', 'plagiarism_vericite'));
        $mform->addHelpButton('vericite_student_report_default_forums', 'studentreportvericite', 'plagiarism_vericite');
        $mform->setDefault('vericite_student_report_default_forums', true);

        $mform->addElement('checkbox', 'vericite_exclude_quotes_default_forums', get_string('excludequotesvericite', 'plagiarism_vericite'));
        $mform->addHelpButton('vericite_exclude_quotes_default_forums', 'excludequotesvericite', 'plagiarism_vericite');
        $mform->setDefault('vericite_exclude_quotes_default_forums', true);

        $mform->addElement('checkbox', 'vericite_exclude_self_plag_default_forums', get_string('excludeselfplagvericite', 'plagiarism_vericite'));
        $mform->addHelpButton('vericite_exclude_self_plag_default_forums', 'excludeselfplagvericite', 'plagiarism_vericite');
        $mform->setDefault('vericite_exclude_self_plag_default_forums', true);

        $mform->addElement('checkbox', 'vericite_store_inst_index_default_forums', get_string('storeinstindexvericite', 'plagiarism_vericite'));
        $mform->addHelpButton('vericite_store_inst_index_default_forums', 'storeinstindexvericite', 'plagiarism_vericite');
        $mform->setDefault('vericite_store_inst_index_default_forums', true);

        $this->add_action_buttons(true);
    }
}
