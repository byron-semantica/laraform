<?php

namespace App\Forms;

class TestForm extends \Laraform
{
  public function wizard() {
    return [
      'basic_details' => [
        'label' => 'Basic Details',
        'elements' => ['date_of_issue', 'to', 'attention', 'subject', 'premises'],
        'buttons' => [
          'previous' => false
        ]
      ],
      'tenant_details' => [
        'label' => 'Tenant Details',
        'elements' => ['main_tenant_section','Full Name','Work Title','Address 1','Address 2','Address 3','Tenant Document Type','Passport','2nd Tenant Section','2nd Tenant Full Name','2nd Tenant Work Title','2nd Tenant Address 1','2nd Tenant Address 2','2nd Tenant Address 3','2nd Tenant Document Type','2nd Tenant Passport','Occupant Section','Occupant Details','Landlord Section','Landlord Full Name','Landlord Address 1','Landlord Address 2','Landlord Address 3','Consultant Name','Consultant Email','Consultant Phone','Consultant Role/Title','Consultant License Number'],
        'labels' => [
          'previous' => 'Back',
          'next' => 'Next'
        ]
      ],

      'fees_section' => [
        'label' => 'Fees Section',
        'elements' => ['Security Deposit', 'Monthly Rent', 'Lease Duration', 'Number of Car Parks', 'Monthly Cost', 'Lease Commencement From', 'Rent Free From', 'Rent Free To', 'Handover Date', 'Minimum Period', 'Break Clause', 'Break Clause Notice Period', 'Refund Deposit'],
        'labels' => [
          'previous' => 'Back',
          'next' => 'Next'
        ]
      ],
      'other_conditions' => [
        'label' => 'Other Conditions',
        'elements' => ['Other Conditions Landlord', 'Other Conditions Tenant', 'Special Conditions Landlord', 'Special Conditions Tenant'],
        'labels' => [
          'previous' => 'Back',
          'next' => 'Next'
        ]
      ],
      'offer_letter_content' => [
        'label' => 'Offer Letter Content',
        'elements' => ['Rates Fees Section', 'Carpark Section',  'Rent-Free Period Section', 'Early Possession Section', 'Bank Content Section',  'Rent Management Fees', 'Managment Fees Paid by', 'Managment Fees Amount',  'Government Rates Paid by', 'Government Rates Amount', 'Government Rent Paid by', 'Government Rent Amount'],
        'labels' => [
          'previous' => 'Back',
          'next' => 'Next'
        ]
      ],
      'replace_text_for_section' => [
        'label' => 'Replace Text for Section',
        'elements' => ['Replace Rental Original', 'Replace Rental Original2','Replace Rental', 'Replace Rental2', 'Replace Car Park', 'Replace Car Park2', 'Replace Terms', 'Replace Terms2', 'Replace Management Fees', 'Replace Management Fees2', 'Replace Government Rates', 'Replace Government Rates2', 'Replace Government Rent', 'Replace Government Rent2', 'Replace Rent-Free Period', 'Replace Rent-Free Period2', 'Replace Early Possession', 'Replace Early Possession2', 'Replace Break Clause', 'Replace Break Clause2', 'Replace Holding Deposit', 'Replace Holding Deposit2', 'Replace Security Deposit', 'Replace Security Deposit2', 'Replace Stamp Duty', 'Replace Stamp Duty2', 'Replace Legal Fees', 'Replace Legal Fees2', 'Replace Bank Consent', 'Replace Bank Consent2', 'Replace Top Part of Last Page', 'Replace Top Part of Last Page2', 'Replace Final Legal Remark', 'Replace Final Legal Remark2'],
        'labels' => [
          'previous' => 'Back',
          'next' => 'Next'
        ]
      ],
      'email_sentence' => [
        'label' => 'Email Sentence',
        'elements' => ['Email Sentence'],
        'labels' => [
          'previous' => 'Back',
          'next' => 'Next'
        ]
      ],
    ];
  }

  public function schema() {
    return [
      'date_of_issue' => [
        'type' => 'date',
        'label' => 'Date of Issue',
      ],
      'to' => [
        'type' => 'text',
        'label' => 'To',
        'default' => ''
      ],
      'attention' => [
        'type' => 'text',
        'label' => 'Attn',
        'default' => ''
      ],
      'subject' => [
        'type' => 'radiogroup',
        'label' => 'Subject',
        'items' => [
          'contract' => 'SUBJECT TO CONTRACT',
          'binding' => 'BINDING OFFER'
        ],
      ],
      'premises' => [
        'type' => 'text',
        'label' => 'Premises (Address as per Landsearch)',
        'default' => ''
      ],
      'main_tenant_section' => [
        'type' => 'radiogroup',
        'label' => 'Main Tenant Sectoion',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ],
        'default' => 'show'
      ],
      'Full Name' => [
        'type' => 'text',
        'label' => 'Full Name',
        'default' => ''
      ],
      'Work Title' => [
        'type' => 'text',
        'label' => 'Work Title',
        'default' => ''
      ],
      'Address 1' => [
        'type' => 'text',
        'label' => 'Address 1',
        'default' => ''
      ],
      'Address 2' => [
        'type' => 'text',
        'label' => 'Address 2',
        'default' => ''
      ],
      'Address 3' => [
        'type' => 'text',
        'label' => 'Address 3',
        'default' => ''
      ],
      'Tenant Document Type' => [
        'type' => 'radiogroup',
        'label' => 'Tenant Document Type',
        'items' => [
          'passport' => 'Passport',
          'hkid' => 'HKID',
          'bri' => 'BRI'
        ],
        'default' => 'show'
      ],
      'Passport' => [
        'type' => 'text',
        'label' => 'Passport/HKID/BRI',
        'default' => ''
      ],
      '2nd Tenant Section' => [
        'type' => 'radiogroup',
        'label' => '2nd Tenant Section',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ],
        'default' => 'show'
      ],
      
      '2nd Tenant Full Name' => [
        'type' => 'text',
        'label' => '2nd Tenant Full Name',
        'default' => ''
      ],
      '2nd Tenant Work Title' => [
        'type' => 'text',
        'label' => '2nd Tenant Work Title',
        'default' => ''
      ],
      '2nd Tenant Address 1' => [
        'type' => 'text',
        'label' => '2nd Tenant Address 1',
        'default' => ''
      ],
      '2nd Tenant Address 2' => [
        'type' => 'text',
        'label' => '2nd Tenant Address 2',
        'default' => ''
      ],
      '2nd Tenant Address 3' => [
        'type' => 'text',
        'label' => '2nd Tenant Address 3',
        'default' => ''
      ],
      '2nd Tenant Document Type' => [
        'type' => 'radiogroup',
        'label' => '2nd Tenant Document Type',
        'items' => [
          'passport' => 'Passport',
          'hkid' => 'HKID',
          'bri' => 'BRI'
        ],
        'default' => 'show'
      ],
      '2nd Tenant Passport' => [
        'type' => 'text',
        'label' => '2nd Tenant Passport/HKID/BRI',
        'default' => ''
      ],
      'Occupant Section' => [
        'type' => 'radiogroup',
        'label' => 'Occupant Section',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ],
        'default' => 'show'
      ],
      'Occupant Details' => [
        'type' => 'text',
        'label' => 'Occupant Details (if Shown)',
        'default' => ''
      ],
      'Landlord Section' => [
        'type' => 'radiogroup',
        'label' => 'Landlord Section',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ],
        'default' => 'show'
      ],
      'Landlord Full Name' => [
        'type' => 'text',
        'label' => 'Landlord Full Name',
        'default' => ''
      ],
      'Landlord Address 1' => [
        'type' => 'text',
        'label' => 'Landlord Address 1',
        'default' => ''
      ],
      'Landlord Address 2' => [
        'type' => 'text',
        'label' => 'Landlord Address 2',
        'default' => ''
      ],
      'Landlord Address 3' => [
        'type' => 'text',
        'label' => 'Landlord Address 3',
        'default' => ''
      ],
      'Consultant Name' => [
        'type' => 'text',
        'label' => 'Consultant Name',
        'default' => ''
      ],
      'Consultant Email' => [
        'type' => 'text',
        'label' => 'Consultant Email',
        'default' => ''
      ],
      'Consultant Phone' => [
        'type' => 'text',
        'label' => 'Consultant Phone',
        'default' => ''
      ],
      'Consultant Role/Title' => [
        'type' => 'text',
        'label' => 'Consultant Role/Title',
        'default' => ''
      ],
      'Consultant License Number' => [
        'type' => 'text',
        'label' => 'Consultant License Number',
        'default' => ''
      ],

      'Security Deposit' => [
        'type' => 'text',
        'label' => 'Security Deposit',
        'default' => ''
      ],
      'Monthly Rent' => [
        'type' => 'text',
        'label' => 'Monthly Rent (Amount)',
        'default' => ''
      ],
      'Lease Duration' => [
        'type' => 'text',
        'label' => 'Lease Duration',
        'default' => ''
      ],
      'Number of Car Parks' => [
        'type' => 'text',
        'label' => 'Number of Car Parks',
        'default' => ''
      ],
      'Monthly Cost' => [
        'type' => 'text',
        'label' => 'Monthly Cost for Car Park(s)',
        'default' => ''
      ],
      'Lease Commencement From' => [
        'type' => 'text',
        'label' => 'Lease Commencement From',
        'default' => ''
      ],
      'Rent Free From' => [
        'type' => 'text',
        'label' => 'Rent Free/Early Poss From',
        'default' => ''
      ],
      'Rent Free To' => [
        'type' => 'text',
        'label' => 'Rent Free/Early Poss to',
        'default' => ''
      ],
      'Handover Date' => [
        'type' => 'text',
        'label' => 'Handover Date',
        'default' => ''
      ],
      'Minimum Period' => [
        'type' => 'text',
        'label' => 'Minimum Period',
        'default' => ''
      ],
      'Break Clause' => [
        'type' => 'radiogroup',
        'label' => 'Break Clause',
        'items' => [
          'tenant' => 'Tenant',
          'landlord' => 'Landlord',
          'both' => 'Both'
        ],
        'default' => 'tenant'
      ],
      'Break Clause Notice Period' => [
        'type' => 'text',
        'label' => 'Break Clause Notice Period',
        'default' => ''
      ],
      'Refund Deposit' => [
        'type' => 'radiogroup',
        'label' => 'Refund deposit on agreement not signed?',
        'items' => [
          'yes' => 'Yes',
          'no' => 'No'
        ],
        'default' => 'yes'
      ],

      'Other Conditions Landlord' => [
        'type' => 'list',
        'label' => 'Other Conditions Landlord',
        'element' => [
          'type' => 'text',
          'placeholder' => 'Write here...'
          
        ],
      ],
      'Other Conditions Tenant' => [
        'type' => 'list',
        'label' => 'Other Conditions Tenant',
        'element' => [
          'type' => 'text',
          'placeholder' => 'Write here...'
          
        ],
      ],
      'Special Conditions Landlord' => [
        'type' => 'list',
        'label' => 'Special Conditions Landlord',
        'element' => [
          'type' => 'text',
          'placeholder' => 'Write here...'
          
        ],
      ],
      'Special Conditions Tenant' => [
        'type' => 'list',
        'label' => 'Special Conditions Tenant',
        'element' => [
          'type' => 'text',
          'placeholder' => 'Write here...'
          
        ],
      ],
// Offer Letter Content
      'Rates Fees Section' => [
        'type' => 'text',
        'label' => 'Rates Fees Section',
        'class' => 'heading'
      ],

      'Carpark Section' => [
        'type' => 'radiogroup',
        'label' => 'Carpark Section',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ],
        'default' => 'show'
      ],
      'Rent-Free Period Section' => [
        'type' => 'radiogroup',
        'label' => 'Rent-Free Period Section',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ],
        'default' => 'show'
      ],
      'Early Possession Section' => [
        'type' => 'radiogroup',
        'label' => 'Early Possession Section',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ],
        'default' => 'show'
      ],
      'Bank Content Section' => [
        'type' => 'radiogroup',
        'label' => 'Bank Content Section',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ],
        'default' => 'show'
      ],



      'Rent Management Fees' => [
        'type' => 'radiogroup',
        'label' => 'Rent Inclusive/Exclusive of Managment Fees, Governmnet Rates and Government Rent',
        'items' => [
          'inclusive' => 'Inclusive',
          'exclusive' => 'Exclusive'
        ],
        'default' => 'inclusive'
      ],
      'Managment Fees Paid by' => [
        'type' => 'radiogroup',
        'label' => 'Managment Fees Paid by',
        'items' => [
          'landlord' => 'Landlord',
          'tenant' => 'Tenant',
          'hide' => 'Hide'
        ],
        'default' => 'landlord'
      ],

      'Managment Fees Amount' => [
        'type' => 'text',
        'label' => 'Managment Fees (Amount)',
        'default' => ''
      ],

      'Government Rates Paid by' => [
        'type' => 'radiogroup',
        'label' => 'Government Rates Paid by',
        'items' => [
          'landlord' => 'Landlord',
          'tenant' => 'Tenant',
          'hide' => 'Hide'
        ],
        'default' => 'landlord'
      ],

      'Government Rates Amount' => [
        'type' => 'text',
        'label' => 'Government Rates (Amount)',
        'default' => ''
      ],

      'Government Rent Paid by' => [
        'type' => 'radiogroup',
        'label' => 'Government Rent Paid by',
        'items' => [
          'landlord' => 'Landlord',
          'tenant' => 'Tenant',
          'hide' => 'Hide'
        ],
        'default' => 'landlord'
      ],

      'Government Rent Amount' => [
        'type' => 'text',
        'label' => 'Government Rent (Amount)',
        'default' => ''
      ],

// Replace text for section 

      'Replace Rental Original' => [
        'type' => 'radiogroup',
        'label' => 'Replace Text for Section “Rental” replace with original text',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ]
      ],
      'Replace Rental Original2' => [
        'type' => 'text',
        'label' =>'',
        'conditions' => [
          ['Replace Rental Original', 'show']
        ]
      ],

      'Replace Rental' => [
        'type' => 'radiogroup',
        'label' => 'Replace Text for Section “Rental”',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ]
      ],
      'Replace Rental2' => [
        'type' => 'text',
        'label' =>'',
        'conditions' => [
          ['Replace Rental', 'show']
        ]
      ],
      
      'Replace Car Park' => [
        'type' => 'radiogroup',
        'label' => 'Replace Text for Section “Car Park”',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ]
      ],
      'Replace Car Park2' => [
        'type' => 'text',
        'label' =>'',
        'conditions' => [
          ['Replace Car Park', 'show']
        ]
      ],
      
      'Replace Terms' => [
        'type' => 'radiogroup',
        'label' => 'Replace Text for Section “Terms”',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ]
      ],
      'Replace Terms2' => [
        'type' => 'text',
        'label' =>'',
        'conditions' => [
          ['Replace Terms', 'show']
        ]
      ],
      
      'Replace Management Fees' => [
        'type' => 'radiogroup',
        'label' => 'Replace Text for Section “Management Fees”',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ]
      ],
      'Replace Management Fees2' => [
        'type' => 'text',
        'label' =>'',
        'conditions' => [
          ['Replace Management Fees', 'show']
        ]
      ],
      
      'Replace Government Rates' => [
        'type' => 'radiogroup',
        'label' => 'Replace Text for Section “Government Rates”',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ]
      ],
      'Replace Government Rates2' => [
        'type' => 'text',
        'label' =>'',
        'conditions' => [
          ['Replace Government Rates', 'show']
        ]
      ],
      
      'Replace Government Rent' => [
        'type' => 'radiogroup',
        'label' => 'Replace Text for Section “Government Rent',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ]
      ],
      'Replace Government Rent2' => [
        'type' => 'text',
        'label' =>'',
        'conditions' => [
          ['Replace Government Rent', 'show']
        ]
      ],
      
      'Replace Rent-Free Period' => [
        'type' => 'radiogroup',
        'label' => 'Replace Text for Section “Rent-Free Period”',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ]
      ],
      'Replace Rent-Free Period2' => [
        'type' => 'text',
        'label' =>'',
        'conditions' => [
          ['Replace Rent-Free period', 'show']
        ]
      ],
      
      'Replace Early Possession' => [
        'type' => 'radiogroup',
        'label' => 'Replace Text for Section “Early Possession”',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ]
      ],
      'Replace Early Possession2' => [
        'type' => 'text',
        'label' =>'',
        'conditions' => [
          ['Replace Early Possession', 'show']
        ]
      ],
      
      'Replace Break Clause' => [
        'type' => 'radiogroup',
        'label' => 'Replace Text for Section “Break Clause”',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ]
      ],
      'Replace Break Clause2' => [
        'type' => 'text',
        'label' =>'',
        'conditions' => [
          ['Replace Break Clause', 'show']
        ]
      ],
      
      'Replace Holding Deposit' => [
        'type' => 'radiogroup',
        'label' => 'Replace Text for Section “Holding Deposit”',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ]
      ],
      'Replace Holding Deposit2' => [
        'type' => 'text',
        'label' =>'',
        'conditions' => [
          ['Replace Holding Deposit', 'show']
        ]
      ],
      
      'Replace Security Deposit' => [
        'type' => 'radiogroup',
        'label' => 'Replace Text for Section “Security Deposit”',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ]
      ],
      'Replace Security Deposit2' => [
        'type' => 'text',
        'label' =>'',
        'conditions' => [
          ['Replace Security Deposit', 'show']
        ]
      ],
      
      'Replace Stamp Duty' => [
        'type' => 'radiogroup',
        'label' => 'Replace Text for Section “Stamp Duty”',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ]
      ],
      'Replace Stamp Duty2' => [
        'type' => 'text',
        'label' =>'',
        'conditions' => [
          ['Replace Stamp Duty', 'show']
        ]
      ],
      
      'Replace Legal Fees' => [
        'type' => 'radiogroup',
        'label' => 'Replace Text for Section “Legal Fees”',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ]
      ],
      'Replace Legal Fees2' => [
        'type' => 'text',
        'label' =>'',
        'conditions' => [
          ['Replace Legal Fees', 'show']
        ]
      ],
      
      'Replace Bank Consent' => [
        'type' => 'radiogroup',
        'label' => 'Replace Text for Section “Bank Consent”',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ]
      ],
      'Replace Bank Consent2' => [
        'type' => 'text',
        'label' =>'',
        'conditions' => [
          ['Replace Bank Consent', 'show']
        ]
      ],
      
      'Replace Top Part of Last Page' => [
        'type' => 'radiogroup',
        'label' => 'Replace Text for Section “Top Part of Last Page”',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ]
      ],
      'Replace Top Part of Last Page2' => [
        'type' => 'text',
        'label' =>'',
        'conditions' => [
          ['Replace Top Part of Last Page', 'show']
        ]
      ],
      
      'Replace Final Legal Remark' => [
        'type' => 'radiogroup',
        'label' => 'Replace Text for Section “Final Legal Remark”',
        'items' => [
          'show' => 'Show',
          'hide' => 'Hide'
        ]
      ],
      'Replace Final Legal Remark2' => [
        'type' => 'text',
        'label' =>'',
        'conditions' => [
          ['Replace Final Legal Remark', 'show']
        ]
      ],


    // Email Sentence

    'Email Sentence' => [
      'type' => 'radiogroup',
      'label' => 'Email Sentence',
      'items' => [
        'no_setence' => 'No Email Sentence',
        'sentence_1' => 'Thereafter kindly send us the draft Tenancy Agreement as soon as possible for the prospective Tenant\’s perusal',
        'sentence_2' => 'Thereafter we shall forthwith prepare the Tenancy Agreement for your perusal.'
      ]
    ],

    ];
  }
}