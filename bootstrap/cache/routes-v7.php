<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/biscolab-recaptcha/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MHR3HoYv3TL95y3d',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/share-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.shareReport',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KUcJ1vyMEljTauCX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forget-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forget.password.get',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'forget.password.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reset.password.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FFZO2j8Rk6SMa15H',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xCzgb8ik9Vzp4Qp0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ev0PWhYcu425G3D5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changePassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'changePasswordGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'changePasswordPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addusers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ufjitKlCkmMd6m9W',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/saveUsers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.save',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/awards' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0D898rQJmWPsfOpU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iIPY2xSWzjzObH9P',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XXM4D6v7uKv87M9I',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adddocuments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rKPMstoaPTZ193kg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/savedocuments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vyk3A8jMBP0lj95I',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addawards' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dJtHEUrhKFFcCyM5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/saveawards' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'awards.save',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/topics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UIvDrYh21Llj5b5j',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addtopics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f3wGc57Lhr6heaeX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/savetopics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UDLYzNLCrmn6uDny',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/states' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wDK7zJf2lmAaon0d',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addstates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pPbWHn97s3wPciwR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/savestates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XGqoGuDZXNCzjHx8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kQ4vCFs9qPCFUnGH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addcategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TkoJRj2ytI3mDAdS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/savecategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oUL2xhrO6xmCzaoA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/links' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D3MZVdQJaysFoVD3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addlinks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KpSx36Fb2WnDhEN7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/savelinks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YFu2fGR2zx5ovLmS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/theme' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KLMByXGxChbCoRbI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addtheme' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2sVUkpiQycKXcjtK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/savetheme' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hj6nYOPGh3ZIr2q2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/playcategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::87V2Ps7bUmeUc7OK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addplaycategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FEzFHN1e4YAjth8o',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/saveplaycategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sz4kLcaWZR0WGhwh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s1XTZEDSNCMJZJKH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adddata' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8VtDBCmSE1q4zQaE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/savedata' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZBEZ1Cuym2kMjaM8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addtopicroles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZpHjH2EHjn8sWj1e',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/savetopicroles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eQxr40bbslh7XjEC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/topicroles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KsQ2d6inY5L8ifay',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/importisgdata' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::atv9q7lvJa3tDvog',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/viewisg' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gan8WpOXwxC81HEY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addisg' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GiJQJwssLVichwcX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/importidadata' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a19UfNcvdkRiV8Ki',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/saveisg' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JjXqb0iOva5Pw02e',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/extemptopics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VEYyggwB0FVUBfRY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addextemptopics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lKJE43rxNHo3VsyM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/saveextemptopics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UvrtWmDr8H6HZ9DW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/extemp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pZpAsm7VMODBB9XB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XQuGg8l4lJXkI6NF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/importextempdata' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0wBEXQFuuFkqPSJt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addextemp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U0xGXCSZykBEPpl4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/saveextemp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Krg85BqDXGuJlj9o',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yQzC02UW9KNI5p0C',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/offerprice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tu39Ujq9uF1aknkx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addofferprice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g2eZHEGF5vf6fUry',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/saveofferprice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j7y6TIWrYV2kqgXA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/vault' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ibpXlj5hkDCbYGV8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/savefolder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e36ZX5eU2kHGtaRW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/uploadfile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'uploadfile',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TdYBLj9zESrf680c',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addscreenshot' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eniJXbm73cZGrZ1d',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/importdata' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kPOD3qcfyfHQcY8U',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/exporttdata' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QvYNNPDg4SGrBQv5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/changeuserpassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'changeuser',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/addstudentbycoach' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addstudentbycoach',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/activemembership' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.activeMembership',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pastmembership' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pastMembership',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/updatemembership' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.updateMembership',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/aboutUs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::25GUZaGduifNdgJN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lOpDZMqyOHne8mWH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sra5Hf5cwu8QHMjC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contactUs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VsGi4CGPjU7NNH5z',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TDt69EBJWgIceD90',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/addreview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::51CJn572n4jI7oTD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XsghLhHAQM5Xw1u2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0UkfnTsjeR5JK5NK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PaUAMTDgZJgUVbpS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8AJVI3o0MNevDkfR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tutorial' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hqDPKXmwHWLa5XtX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/regeneratetopics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9GPAsHrSaR1oxv4k',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/isg' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sg83zb8E4IbNFWB4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/extemp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Sn9gzTeQoRX9QrOr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/freeresources' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Gg4ptHdWrqJpXDmr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/links' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6wsNE1QmD5c57MK5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.services',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wqKSTey128g6vb7m',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contactUS' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5XD3Iv3PocmdnGB8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/demosearch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C8moXMU9Mm3g2UBq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kiNb6PfeAOjw3y5Z',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W9AfN3G0CYAuaaGs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clear_view_cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sClMZjYcpHODt7Qi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coach/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QHONHSGHyA4bV7zC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coach/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ROFUeBOo821U4me6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coach/students' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IoebbSipqoz7I2q2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coach/addstudent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jAsIvnMAJCPMxASk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coach/savestudent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XNYnXBre9IqQEWOH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coach/create-transaction' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'createTransaction',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coach/process-transaction' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'processTransaction',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coach/success-transaction' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'successTransaction',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coach/cancel-transaction' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cancelTransaction',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coach/submitcheque' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submitcheque',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coach/user-membership' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coachmembership',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coach/vault' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q8veqnWKqbIavEUh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coach/extemp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IHirKCwP1QtXegzN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M0zfw5jMXkb4z8sG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coach/printdomestic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R6DU7xUPS1yWyQC1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coach/printforiegn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4GjnMlllE9jCvS1k',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coach/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::walMVwMBHApzTT8p',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6gdjsB6uCbgkOwyT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coach/searchprints' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lDJhSAoqe3yAWkN8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coach/searchprint' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zAVCKTqtKv8RBq2D',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/student/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A6iWhieQwso7DtP8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/student/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iDI8t7jRjxpE2LAj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/student/extemp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L9UeWSOCcO8XVJcH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4aHgBwzOCrXuGbhC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/student/vault' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lhJPa1mEPRZa0Ph3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.save',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V4UMtsyO9wjRWBfV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_ignition/s(?|cripts/([^/]++)(*:37)|tyles/([^/]++)(*:58))|/reset\\-password/([^/]++)(*:91)|/admin/(?|edit(?|Profile/([^/]++)(*:131)|Users/([^/]++)(*:153)|Awards/([^/]++)(*:176)|d(?|ocuments/([^/]++)(*:205)|ata/([^/]++)(*:225))|t(?|opic(?|s/([^/]++)(*:255)|roles/([^/]++)(*:277))|heme/([^/]++)(*:299))|state/([^/]++)(*:322)|links/([^/]++)(*:344)|categorylinks/([^/]++)(*:374)|playcategory/([^/]++)(*:403)|isg/([^/]++)(*:423)|extemp(?|topics/([^/]++)(*:455)|/([^/]++)(*:472))|offerprice/([^/]++)(*:500)|folder/([^/]++)(*:523)|membership/([^/]++)(*:550))|update(?|Profile/([^/]++)(*:584)|Users/([^/]++)(*:606)|Awards/([^/]++)(*:629)|d(?|ocuments/([^/]++)(*:658)|ata/([^/]++)(*:678))|t(?|opic(?|s/([^/]++)(*:708)|roles/([^/]++)(*:730))|heme/([^/]++)(*:752))|state/([^/]++)(*:775)|links/([^/]++)(*:797)|categorylinks/([^/]++)(*:827)|playcategory/([^/]++)(*:856)|isg/([^/]++)(*:876)|extemp(?|topics/([^/]++)(*:908)|/([^/]++)(*:925))|offerprice/([^/]++)(*:953))|view(?|studentlist/([^/]++)(*:989)|Users/([^/]++)(*:1011)|/([^/]++)(*:1029)|me(?|ssages/([^/]++)(*:1058)|mbership/([^/]++)(*:1084)))|d(?|elete(?|user/([^/]++)(*:1120)|Awards/([^/]++)(*:1144)|d(?|ocuments/([^/]++)(*:1174)|ata/([^/]++)(*:1195))|t(?|opic(?|s/([^/]++)(*:1226)|roles/([^/]++)(*:1249))|heme/([^/]++)(*:1272))|state/([^/]++)(*:1296)|links/([^/]++)(*:1319)|category/([^/]++)(*:1345)|playcategory/([^/]++)(*:1375)|isg/([^/]++)(*:1396)|messages/([^/]++)(*:1422)|offerprice/([^/]++)(*:1450)|f(?|older/([^/]++)(*:1477)|ile/([^/]++)(*:1498))|review/([^/]++)(*:1523))|ownload/([^/]++)(*:1549))|replymessages/([^/]++)(?|(*:1584))|folder\\-data/([^/]++)(*:1615)|approveview/([^/]++)(*:1644))|/download/([^/]++)(*:1672)|/view/([^/]++)(*:1695)|/coach/(?|edit(?|student/([^/]++)(*:1737)|Profile/([^/]++)(*:1762))|update(?|student/([^/]++)(*:1797)|Profile/([^/]++)(*:1822))|deletestudent/([^/]++)(*:1854)|coach_folder_data/([^/]++)(*:1889)))/?$}sDu',
    ),
    3 => 
    array (
      37 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.scripts',
          ),
          1 => 
          array (
            0 => 'script',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      58 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.styles',
          ),
          1 => 
          array (
            0 => 'style',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      91 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reset.password.get',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      131 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JT5phcWmYq0idBc6',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      153 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v2hpZRSHz5UGu2AT',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BvbZuAzcBExn8ZcW',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v2W1VxRGRlxmfRrI',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      225 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cqoM8VMDtTAhHy92',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      255 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aTQYBB047OJwFqKe',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      277 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VHiGKfuMjzqntvGG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      299 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7bzheWMsalu2y65b',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      322 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d5CsCRntKA3kcK5w',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A6n19h8Rn5XURQze',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      374 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VkRoYwxCmJLQxQPy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      403 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m21CUnc9Yd84Pqzr',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      423 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GEFmuSvZNN6mGwI4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      455 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AnhIPFxpaJUNO3KD',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      472 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n7SXlAX4FvPfLJyi',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      500 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jujUc6Af1yhsHEka',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      523 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CIhMs5aIYDcow6nz',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      550 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.editMembership',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      584 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MaW2KxXHn1DrhMpL',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      606 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.users',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      629 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zoJJn7W2kQ7Q8OeS',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      658 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::69NtYLxENYXXaVDW',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      678 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oIzMMeeo4yvFFYQJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      708 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DKQngVND1mfik0ur',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      730 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F3vAtoeAnGUv1Gdt',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      752 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ndH0LBAtWv7zRDR9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      775 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cRk0OVWbMiMRneqI',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      797 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ajh8Hm9NwY2YQjiE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      827 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5oZMNDfz8xGh4rbC',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      856 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BXN45OkZZ1bQOyg5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      876 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::totveTOCIe8ypGGI',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      908 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PI3OGLfMHfBI5NGn',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      925 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EXvJtVaWD01JDfcl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      953 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1EqWGxKtydqWDk5l',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      989 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DWdhwanwcki0Xf3j',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1011 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oIWlIsya89TWbpRS',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1029 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gFd0viRSiIb81oQB',
          ),
          1 => 
          array (
            0 => 'file',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1058 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wAJKQG8D9BYKUOIu',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1084 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.viewMembership',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1120 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ymI92PMedSck9JcT',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1144 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xf9C8IKvvrWrTxTF',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1174 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sPAiTr4JSqBPjlsp',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6VIramen4PMRQyvP',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j2OWDUpZ9eiGlyap',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1249 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GiFEzxQ3AEGSJcEN',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1272 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::76QRES6ubU8TowHR',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qAEUqxB6lFiYWb0K',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1319 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gp5ETXYm6vrruPIu',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ydbNHFy8dlj2p5GL',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5a5Ua9JAjcqssXaM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1396 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::663S3dDkK7UtrqKL',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1422 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BUdLPk5uufdjHwpM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1450 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xwmsQkmLTERZ4ofL',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1477 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RYXqo8ByUuK3oK15',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1498 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4YNO1Vgp5SKaRvdy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1523 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bMKsj2My5TiIY1RQ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1549 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0xeXuiPptQHBvpzr',
          ),
          1 => 
          array (
            0 => 'file',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1584 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T6ioyD4tXwx01PVs',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UTIMzwCs3KpX8NMC',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1615 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'folderData',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pIyDsqyxzZcXJA0O',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LKKZeLCikBtfCiz2',
          ),
          1 => 
          array (
            0 => 'file',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1695 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pN9ToRHPXbeTaNw5',
          ),
          1 => 
          array (
            0 => 'file',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1737 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PD3wn1sDdBakNEhq',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1762 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QupQAsmumuAwKKlS',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1797 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8pkfVodzpoFiLBNt',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1822 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4Dxs6EzC89hBuvHz',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1854 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CMHXkdWBYV5RKJ4g',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1889 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lfbJHQGEAO4b3RhY',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::MHR3HoYv3TL95y3d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'biscolab-recaptcha/validate',
      'action' => 
      array (
        'uses' => 'Biscolab\\ReCaptcha\\Controllers\\ReCaptchaController@validateV3',
        'controller' => 'Biscolab\\ReCaptcha\\Controllers\\ReCaptchaController@validateV3',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::MHR3HoYv3TL95y3d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
          1 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionConfigValueEnabled:enableRunnableSolutions',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.shareReport' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/share-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
          1 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionConfigValueEnabled:enableShareButton',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ShareReportController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ShareReportController',
        'as' => 'ignition.shareReport',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.scripts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/scripts/{script}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ScriptController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ScriptController',
        'as' => 'ignition.scripts',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.styles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/styles/{style}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\StyleController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\StyleController',
        'as' => 'ignition.styles',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KUcJ1vyMEljTauCX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:299:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:81:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000637cc5620000000056b79548";}";s:4:"hash";s:44:"N9EBJCCgYE1INH1f6jq365aFe918CBO8/qy2gk2y0Ck=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::KUcJ1vyMEljTauCX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forget.password.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ForgotPasswordController@showForgetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\ForgotPasswordController@showForgetPasswordForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'forget.password.get',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forget.password.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ForgotPasswordController@submitForgetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\ForgotPasswordController@submitForgetPasswordForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'forget.password.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reset.password.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ForgotPasswordController@showResetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\ForgotPasswordController@showResetPasswordForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reset.password.get',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reset.password.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ForgotPasswordController@submitResetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\ForgotPasswordController@submitResetPasswordForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reset.password.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'login',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@login',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@login',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FFZO2j8Rk6SMa15H' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@loginAdmin',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@loginAdmin',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::FFZO2j8Rk6SMa15H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xCzgb8ik9Vzp4Qp0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::xCzgb8ik9Vzp4Qp0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ev0PWhYcu425G3D5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@dashboard',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@dashboard',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Ev0PWhYcu425G3D5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JT5phcWmYq0idBc6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/editProfile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@editProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@editProfile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::JT5phcWmYq0idBc6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MaW2KxXHn1DrhMpL' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/updateProfile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@updateprofile',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@updateprofile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::MaW2KxXHn1DrhMpL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'changePasswordGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/changePassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@showChangePasswordGet',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@showChangePasswordGet',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'changePasswordGet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'changePasswordPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/changePassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@changePasswordPost',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@changePasswordPost',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'changePasswordPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@users',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@users',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'users.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DWdhwanwcki0Xf3j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/viewstudentlist/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@users',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@users',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::DWdhwanwcki0Xf3j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ufjitKlCkmMd6m9W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addusers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@addusers',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@addusers',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ufjitKlCkmMd6m9W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.save' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/saveUsers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@saveUsers',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@saveUsers',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'users.save',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v2hpZRSHz5UGu2AT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/editUsers/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@editUsers',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@editUsers',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::v2hpZRSHz5UGu2AT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oIWlIsya89TWbpRS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/viewUsers/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@viewUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@viewUser',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::oIWlIsya89TWbpRS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.users' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/updateUsers/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@updateUsers',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@updateUsers',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'update.users',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ymI92PMedSck9JcT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deleteuser/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ymI92PMedSck9JcT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0D898rQJmWPsfOpU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/awards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AwardsController@index',
        'controller' => 'App\\Http\\Controllers\\AwardsController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::0D898rQJmWPsfOpU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BvbZuAzcBExn8ZcW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/editAwards/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AwardsController@editAwards',
        'controller' => 'App\\Http\\Controllers\\AwardsController@editAwards',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::BvbZuAzcBExn8ZcW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zoJJn7W2kQ7Q8OeS' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/updateAwards/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AwardsController@updateAwards',
        'controller' => 'App\\Http\\Controllers\\AwardsController@updateAwards',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zoJJn7W2kQ7Q8OeS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xf9C8IKvvrWrTxTF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deleteAwards/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AwardsController@deleteAwards',
        'controller' => 'App\\Http\\Controllers\\AwardsController@deleteAwards',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::xf9C8IKvvrWrTxTF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iIPY2xSWzjzObH9P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@logout',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@logout',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::iIPY2xSWzjzObH9P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XXM4D6v7uKv87M9I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersGuideController@index',
        'controller' => 'App\\Http\\Controllers\\UsersGuideController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::XXM4D6v7uKv87M9I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rKPMstoaPTZ193kg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adddocuments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersGuideController@adddocuments',
        'controller' => 'App\\Http\\Controllers\\UsersGuideController@adddocuments',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::rKPMstoaPTZ193kg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vyk3A8jMBP0lj95I' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/savedocuments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersGuideController@savedocuments',
        'controller' => 'App\\Http\\Controllers\\UsersGuideController@savedocuments',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Vyk3A8jMBP0lj95I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v2W1VxRGRlxmfRrI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/editdocuments/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersGuideController@editDocuments',
        'controller' => 'App\\Http\\Controllers\\UsersGuideController@editDocuments',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::v2W1VxRGRlxmfRrI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::69NtYLxENYXXaVDW' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/updatedocuments/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersGuideController@updateDocuments',
        'controller' => 'App\\Http\\Controllers\\UsersGuideController@updateDocuments',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::69NtYLxENYXXaVDW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sPAiTr4JSqBPjlsp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deletedocuments/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersGuideController@deleteDocuments',
        'controller' => 'App\\Http\\Controllers\\UsersGuideController@deleteDocuments',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::sPAiTr4JSqBPjlsp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0xeXuiPptQHBvpzr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/download/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersGuideController@download',
        'controller' => 'App\\Http\\Controllers\\UsersGuideController@download',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::0xeXuiPptQHBvpzr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dJtHEUrhKFFcCyM5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addawards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AwardsController@addawards',
        'controller' => 'App\\Http\\Controllers\\AwardsController@addawards',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::dJtHEUrhKFFcCyM5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'awards.save' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/saveawards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AwardsController@saveawards',
        'controller' => 'App\\Http\\Controllers\\AwardsController@saveawards',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'awards.save',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UIvDrYh21Llj5b5j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/topics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\RandomController@index',
        'controller' => 'App\\Http\\Controllers\\RandomController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::UIvDrYh21Llj5b5j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f3wGc57Lhr6heaeX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addtopics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\RandomController@addTopics',
        'controller' => 'App\\Http\\Controllers\\RandomController@addTopics',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::f3wGc57Lhr6heaeX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UDLYzNLCrmn6uDny' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/savetopics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\RandomController@saveTopics',
        'controller' => 'App\\Http\\Controllers\\RandomController@saveTopics',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::UDLYzNLCrmn6uDny',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aTQYBB047OJwFqKe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edittopics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\RandomController@editTopics',
        'controller' => 'App\\Http\\Controllers\\RandomController@editTopics',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::aTQYBB047OJwFqKe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DKQngVND1mfik0ur' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/updatetopics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\RandomController@updateTopics',
        'controller' => 'App\\Http\\Controllers\\RandomController@updateTopics',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::DKQngVND1mfik0ur',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j2OWDUpZ9eiGlyap' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deletetopics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\RandomController@deleteTopics',
        'controller' => 'App\\Http\\Controllers\\RandomController@deleteTopics',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::j2OWDUpZ9eiGlyap',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wDK7zJf2lmAaon0d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\statesController@getStates',
        'controller' => 'App\\Http\\Controllers\\statesController@getStates',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::wDK7zJf2lmAaon0d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pPbWHn97s3wPciwR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addstates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\statesController@addStates',
        'controller' => 'App\\Http\\Controllers\\statesController@addStates',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::pPbWHn97s3wPciwR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XGqoGuDZXNCzjHx8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/savestates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\statesController@saveStates',
        'controller' => 'App\\Http\\Controllers\\statesController@saveStates',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::XGqoGuDZXNCzjHx8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d5CsCRntKA3kcK5w' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/editstate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\statesController@editState',
        'controller' => 'App\\Http\\Controllers\\statesController@editState',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::d5CsCRntKA3kcK5w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cRk0OVWbMiMRneqI' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/updatestate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\statesController@updateState',
        'controller' => 'App\\Http\\Controllers\\statesController@updateState',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::cRk0OVWbMiMRneqI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gFd0viRSiIb81oQB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/view/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\statesController@view',
        'controller' => 'App\\Http\\Controllers\\statesController@view',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::gFd0viRSiIb81oQB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qAEUqxB6lFiYWb0K' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deletestate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\statesController@deleteState',
        'controller' => 'App\\Http\\Controllers\\statesController@deleteState',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::qAEUqxB6lFiYWb0K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kQ4vCFs9qPCFUnGH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LinksController@getCategory',
        'controller' => 'App\\Http\\Controllers\\LinksController@getCategory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::kQ4vCFs9qPCFUnGH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TkoJRj2ytI3mDAdS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LinksController@addCategory',
        'controller' => 'App\\Http\\Controllers\\LinksController@addCategory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::TkoJRj2ytI3mDAdS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oUL2xhrO6xmCzaoA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/savecategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LinksController@saveCategory',
        'controller' => 'App\\Http\\Controllers\\LinksController@saveCategory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::oUL2xhrO6xmCzaoA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A6n19h8Rn5XURQze' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/editlinks/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LinksController@editCategory',
        'controller' => 'App\\Http\\Controllers\\LinksController@editCategory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::A6n19h8Rn5XURQze',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ajh8Hm9NwY2YQjiE' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/updatelinks/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LinksController@updateCategory',
        'controller' => 'App\\Http\\Controllers\\LinksController@updateCategory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Ajh8Hm9NwY2YQjiE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gp5ETXYm6vrruPIu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deletelinks/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LinksController@deleteCategory',
        'controller' => 'App\\Http\\Controllers\\LinksController@deleteCategory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::gp5ETXYm6vrruPIu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D3MZVdQJaysFoVD3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/links',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LinksController@viewLinks',
        'controller' => 'App\\Http\\Controllers\\LinksController@viewLinks',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::D3MZVdQJaysFoVD3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KpSx36Fb2WnDhEN7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addlinks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LinksController@addLinks',
        'controller' => 'App\\Http\\Controllers\\LinksController@addLinks',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::KpSx36Fb2WnDhEN7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YFu2fGR2zx5ovLmS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/savelinks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LinksController@saveLinks',
        'controller' => 'App\\Http\\Controllers\\LinksController@saveLinks',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::YFu2fGR2zx5ovLmS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VkRoYwxCmJLQxQPy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/editcategorylinks/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LinksController@editCategoryLinks',
        'controller' => 'App\\Http\\Controllers\\LinksController@editCategoryLinks',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::VkRoYwxCmJLQxQPy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5oZMNDfz8xGh4rbC' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/updatecategorylinks/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LinksController@updateCategoryLinks',
        'controller' => 'App\\Http\\Controllers\\LinksController@updateCategoryLinks',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::5oZMNDfz8xGh4rbC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ydbNHFy8dlj2p5GL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deletecategory/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\LinksController@deleteLinks',
        'controller' => 'App\\Http\\Controllers\\LinksController@deleteLinks',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ydbNHFy8dlj2p5GL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KLMByXGxChbCoRbI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/theme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ThemeController@index',
        'controller' => 'App\\Http\\Controllers\\ThemeController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::KLMByXGxChbCoRbI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2sVUkpiQycKXcjtK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addtheme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ThemeController@addTheme',
        'controller' => 'App\\Http\\Controllers\\ThemeController@addTheme',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::2sVUkpiQycKXcjtK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hj6nYOPGh3ZIr2q2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/savetheme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ThemeController@saveTheme',
        'controller' => 'App\\Http\\Controllers\\ThemeController@saveTheme',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::hj6nYOPGh3ZIr2q2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7bzheWMsalu2y65b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edittheme/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ThemeController@editTheme',
        'controller' => 'App\\Http\\Controllers\\ThemeController@editTheme',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::7bzheWMsalu2y65b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ndH0LBAtWv7zRDR9' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/updatetheme/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ThemeController@updateTheme',
        'controller' => 'App\\Http\\Controllers\\ThemeController@updateTheme',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ndH0LBAtWv7zRDR9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::76QRES6ubU8TowHR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deletetheme/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ThemeController@deleteTheme',
        'controller' => 'App\\Http\\Controllers\\ThemeController@deleteTheme',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::76QRES6ubU8TowHR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::87V2Ps7bUmeUc7OK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/playcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PlayCategoty@index',
        'controller' => 'App\\Http\\Controllers\\PlayCategoty@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::87V2Ps7bUmeUc7OK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FEzFHN1e4YAjth8o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addplaycategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PlayCategoty@addCategory',
        'controller' => 'App\\Http\\Controllers\\PlayCategoty@addCategory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::FEzFHN1e4YAjth8o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sz4kLcaWZR0WGhwh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/saveplaycategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PlayCategoty@saveCategory',
        'controller' => 'App\\Http\\Controllers\\PlayCategoty@saveCategory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::sz4kLcaWZR0WGhwh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m21CUnc9Yd84Pqzr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/editplaycategory/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PlayCategoty@editCategory',
        'controller' => 'App\\Http\\Controllers\\PlayCategoty@editCategory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::m21CUnc9Yd84Pqzr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BXN45OkZZ1bQOyg5' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/updateplaycategory/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PlayCategoty@updateCategory',
        'controller' => 'App\\Http\\Controllers\\PlayCategoty@updateCategory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::BXN45OkZZ1bQOyg5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5a5Ua9JAjcqssXaM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deleteplaycategory/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\PlayCategoty@delete',
        'controller' => 'App\\Http\\Controllers\\PlayCategoty@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::5a5Ua9JAjcqssXaM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s1XTZEDSNCMJZJKH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\DataController@index',
        'controller' => 'App\\Http\\Controllers\\DataController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::s1XTZEDSNCMJZJKH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8VtDBCmSE1q4zQaE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adddata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\DataController@adddata',
        'controller' => 'App\\Http\\Controllers\\DataController@adddata',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::8VtDBCmSE1q4zQaE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZBEZ1Cuym2kMjaM8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/savedata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\DataController@saveData',
        'controller' => 'App\\Http\\Controllers\\DataController@saveData',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ZBEZ1Cuym2kMjaM8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cqoM8VMDtTAhHy92' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/editdata/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\DataController@editData',
        'controller' => 'App\\Http\\Controllers\\DataController@editData',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::cqoM8VMDtTAhHy92',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oIzMMeeo4yvFFYQJ' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/updatedata/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\DataController@updateData',
        'controller' => 'App\\Http\\Controllers\\DataController@updateData',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::oIzMMeeo4yvFFYQJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6VIramen4PMRQyvP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deletedata/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\DataController@delete',
        'controller' => 'App\\Http\\Controllers\\DataController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::6VIramen4PMRQyvP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZpHjH2EHjn8sWj1e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addtopicroles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TopicRoles@TopicRole',
        'controller' => 'App\\Http\\Controllers\\TopicRoles@TopicRole',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ZpHjH2EHjn8sWj1e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eQxr40bbslh7XjEC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/savetopicroles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TopicRoles@saveTopicRole',
        'controller' => 'App\\Http\\Controllers\\TopicRoles@saveTopicRole',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::eQxr40bbslh7XjEC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KsQ2d6inY5L8ifay' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/topicroles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TopicRoles@viewTopicRole',
        'controller' => 'App\\Http\\Controllers\\TopicRoles@viewTopicRole',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::KsQ2d6inY5L8ifay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::atv9q7lvJa3tDvog' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/importisgdata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TopicRoles@importData',
        'controller' => 'App\\Http\\Controllers\\TopicRoles@importData',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::atv9q7lvJa3tDvog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VHiGKfuMjzqntvGG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edittopicroles/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TopicRoles@editTopicRole',
        'controller' => 'App\\Http\\Controllers\\TopicRoles@editTopicRole',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::VHiGKfuMjzqntvGG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F3vAtoeAnGUv1Gdt' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/updatetopicroles/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TopicRoles@updateTopicRole',
        'controller' => 'App\\Http\\Controllers\\TopicRoles@updateTopicRole',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::F3vAtoeAnGUv1Gdt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GiFEzxQ3AEGSJcEN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deletetopicroles/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TopicRoles@deleteTopicRole',
        'controller' => 'App\\Http\\Controllers\\TopicRoles@deleteTopicRole',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::GiFEzxQ3AEGSJcEN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gan8WpOXwxC81HEY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/viewisg',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ISGController@index',
        'controller' => 'App\\Http\\Controllers\\ISGController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::gan8WpOXwxC81HEY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GiJQJwssLVichwcX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addisg',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ISGController@addIsg',
        'controller' => 'App\\Http\\Controllers\\ISGController@addIsg',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::GiJQJwssLVichwcX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a19UfNcvdkRiV8Ki' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/importidadata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ISGController@importData',
        'controller' => 'App\\Http\\Controllers\\ISGController@importData',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::a19UfNcvdkRiV8Ki',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JjXqb0iOva5Pw02e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/saveisg',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ISGController@saveIsg',
        'controller' => 'App\\Http\\Controllers\\ISGController@saveIsg',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::JjXqb0iOva5Pw02e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GEFmuSvZNN6mGwI4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/editisg/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ISGController@editIsg',
        'controller' => 'App\\Http\\Controllers\\ISGController@editIsg',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::GEFmuSvZNN6mGwI4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::totveTOCIe8ypGGI' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/updateisg/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ISGController@updateIsg',
        'controller' => 'App\\Http\\Controllers\\ISGController@updateIsg',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::totveTOCIe8ypGGI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::663S3dDkK7UtrqKL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deleteisg/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ISGController@deleteIsg',
        'controller' => 'App\\Http\\Controllers\\ISGController@deleteIsg',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::663S3dDkK7UtrqKL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VEYyggwB0FVUBfRY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/extemptopics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ExtempController@index',
        'controller' => 'App\\Http\\Controllers\\ExtempController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::VEYyggwB0FVUBfRY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lKJE43rxNHo3VsyM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addextemptopics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ExtempController@addExtempTopics',
        'controller' => 'App\\Http\\Controllers\\ExtempController@addExtempTopics',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::lKJE43rxNHo3VsyM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UvrtWmDr8H6HZ9DW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/saveextemptopics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ExtempController@saveExtempTopics',
        'controller' => 'App\\Http\\Controllers\\ExtempController@saveExtempTopics',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::UvrtWmDr8H6HZ9DW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AnhIPFxpaJUNO3KD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/editextemptopics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ExtempController@editExtempTopics',
        'controller' => 'App\\Http\\Controllers\\ExtempController@editExtempTopics',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::AnhIPFxpaJUNO3KD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PI3OGLfMHfBI5NGn' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/updateextemptopics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ExtempController@updateExtempTopics',
        'controller' => 'App\\Http\\Controllers\\ExtempController@updateExtempTopics',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::PI3OGLfMHfBI5NGn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pZpAsm7VMODBB9XB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/extemp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ExtempController@viewEXtemp',
        'controller' => 'App\\Http\\Controllers\\ExtempController@viewEXtemp',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::pZpAsm7VMODBB9XB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XQuGg8l4lJXkI6NF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/extemp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ExtempController@viewEXtempPost',
        'controller' => 'App\\Http\\Controllers\\ExtempController@viewEXtempPost',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::XQuGg8l4lJXkI6NF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0wBEXQFuuFkqPSJt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/importextempdata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ExtempController@importData',
        'controller' => 'App\\Http\\Controllers\\ExtempController@importData',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::0wBEXQFuuFkqPSJt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U0xGXCSZykBEPpl4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addextemp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ExtempController@addEXtemp',
        'controller' => 'App\\Http\\Controllers\\ExtempController@addEXtemp',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::U0xGXCSZykBEPpl4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Krg85BqDXGuJlj9o' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/saveextemp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ExtempController@saveEXtemp',
        'controller' => 'App\\Http\\Controllers\\ExtempController@saveEXtemp',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Krg85BqDXGuJlj9o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n7SXlAX4FvPfLJyi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/editextemp/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ExtempController@editExtemp',
        'controller' => 'App\\Http\\Controllers\\ExtempController@editExtemp',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::n7SXlAX4FvPfLJyi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EXvJtVaWD01JDfcl' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/updateextemp/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ExtempController@updateExtemp',
        'controller' => 'App\\Http\\Controllers\\ExtempController@updateExtemp',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::EXvJtVaWD01JDfcl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yQzC02UW9KNI5p0C' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\contactusController@index',
        'controller' => 'App\\Http\\Controllers\\contactusController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::yQzC02UW9KNI5p0C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wAJKQG8D9BYKUOIu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/viewmessages/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\contactusController@viewMessages',
        'controller' => 'App\\Http\\Controllers\\contactusController@viewMessages',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::wAJKQG8D9BYKUOIu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T6ioyD4tXwx01PVs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/replymessages/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\contactusController@replyMessages',
        'controller' => 'App\\Http\\Controllers\\contactusController@replyMessages',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::T6ioyD4tXwx01PVs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UTIMzwCs3KpX8NMC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/replymessages/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\contactusController@replyMessagestoUser',
        'controller' => 'App\\Http\\Controllers\\contactusController@replyMessagestoUser',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::UTIMzwCs3KpX8NMC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BUdLPk5uufdjHwpM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deletemessages/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\contactusController@deleteMessages',
        'controller' => 'App\\Http\\Controllers\\contactusController@deleteMessages',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::BUdLPk5uufdjHwpM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tu39Ujq9uF1aknkx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/offerprice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@offerPrice',
        'controller' => 'App\\Http\\Controllers\\HomeController@offerPrice',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::tu39Ujq9uF1aknkx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g2eZHEGF5vf6fUry' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/addofferprice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@addofferPrice',
        'controller' => 'App\\Http\\Controllers\\HomeController@addofferPrice',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::g2eZHEGF5vf6fUry',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j7y6TIWrYV2kqgXA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/saveofferprice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@saveofferPrice',
        'controller' => 'App\\Http\\Controllers\\HomeController@saveofferPrice',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::j7y6TIWrYV2kqgXA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jujUc6Af1yhsHEka' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/editofferprice/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@editofferPrice',
        'controller' => 'App\\Http\\Controllers\\HomeController@editofferPrice',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::jujUc6Af1yhsHEka',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1EqWGxKtydqWDk5l' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/updateofferprice/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@updateofferPrice',
        'controller' => 'App\\Http\\Controllers\\HomeController@updateofferPrice',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::1EqWGxKtydqWDk5l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xwmsQkmLTERZ4ofL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deleteofferprice/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@deleteoffer',
        'controller' => 'App\\Http\\Controllers\\HomeController@deleteoffer',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::xwmsQkmLTERZ4ofL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ibpXlj5hkDCbYGV8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/vault',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\VaultController@addFolder',
        'controller' => 'App\\Http\\Controllers\\VaultController@addFolder',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ibpXlj5hkDCbYGV8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'folderData' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/folder-data/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\VaultController@getFolderData',
        'controller' => 'App\\Http\\Controllers\\VaultController@getFolderData',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'folderData',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e36ZX5eU2kHGtaRW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/savefolder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\VaultController@storeFolder',
        'controller' => 'App\\Http\\Controllers\\VaultController@storeFolder',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::e36ZX5eU2kHGtaRW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CIhMs5aIYDcow6nz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/editfolder/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\VaultController@editFolder',
        'controller' => 'App\\Http\\Controllers\\VaultController@editFolder',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::CIhMs5aIYDcow6nz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RYXqo8ByUuK3oK15' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deletefolder/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\VaultController@deleteFolder',
        'controller' => 'App\\Http\\Controllers\\VaultController@deleteFolder',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::RYXqo8ByUuK3oK15',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4YNO1Vgp5SKaRvdy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/deletefile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\VaultController@deleteFile',
        'controller' => 'App\\Http\\Controllers\\VaultController@deleteFile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::4YNO1Vgp5SKaRvdy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'uploadfile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/uploadfile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\VaultController@fileUpload',
        'controller' => 'App\\Http\\Controllers\\VaultController@fileUpload',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'uploadfile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TdYBLj9zESrf680c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@adminViewReviews',
        'controller' => 'App\\Http\\Controllers\\HomeController@adminViewReviews',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::TdYBLj9zESrf680c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eniJXbm73cZGrZ1d' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/addscreenshot',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@addScreenshot',
        'controller' => 'App\\Http\\Controllers\\HomeController@addScreenshot',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::eniJXbm73cZGrZ1d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pIyDsqyxzZcXJA0O' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/approveview/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@approveReview',
        'controller' => 'App\\Http\\Controllers\\HomeController@approveReview',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::pIyDsqyxzZcXJA0O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bMKsj2My5TiIY1RQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deletereview/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@deleteReview',
        'controller' => 'App\\Http\\Controllers\\HomeController@deleteReview',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::bMKsj2My5TiIY1RQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kPOD3qcfyfHQcY8U' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/importdata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\userController@importData',
        'controller' => 'App\\Http\\Controllers\\userController@importData',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::kPOD3qcfyfHQcY8U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QvYNNPDg4SGrBQv5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/exporttdata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\userController@exportData',
        'controller' => 'App\\Http\\Controllers\\userController@exportData',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::QvYNNPDg4SGrBQv5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'changeuser' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/changeuserpassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@updatePassword',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'changeuser',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addstudentbycoach' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/addstudentbycoach',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@addstudentbycoach',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@addstudentbycoach',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'addstudentbycoach',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.activeMembership' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/activemembership',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MembershipController@adminActiveMemberships',
        'controller' => 'App\\Http\\Controllers\\Admin\\MembershipController@adminActiveMemberships',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.activeMembership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pastMembership' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pastmembership',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MembershipController@adminPastMembership',
        'controller' => 'App\\Http\\Controllers\\Admin\\MembershipController@adminPastMembership',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.pastMembership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.viewMembership' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/viewmembership/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MembershipController@adminViewMembership',
        'controller' => 'App\\Http\\Controllers\\Admin\\MembershipController@adminViewMembership',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.viewMembership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.editMembership' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/editmembership/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MembershipController@adminEditMembership',
        'controller' => 'App\\Http\\Controllers\\Admin\\MembershipController@adminEditMembership',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.editMembership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.updateMembership' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/updatemembership',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MembershipController@updateMembership',
        'controller' => 'App\\Http\\Controllers\\Admin\\MembershipController@updateMembership',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.updateMembership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::25GUZaGduifNdgJN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'aboutUs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@aboutUs',
        'controller' => 'App\\Http\\Controllers\\HomeController@aboutUs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::25GUZaGduifNdgJN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lOpDZMqyOHne8mWH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@Home',
        'controller' => 'App\\Http\\Controllers\\HomeController@Home',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lOpDZMqyOHne8mWH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sra5Hf5cwu8QHMjC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@Home',
        'controller' => 'App\\Http\\Controllers\\HomeController@Home',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sra5Hf5cwu8QHMjC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VsGi4CGPjU7NNH5z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contactUs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@contactUs',
        'controller' => 'App\\Http\\Controllers\\HomeController@contactUs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::VsGi4CGPjU7NNH5z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TDt69EBJWgIceD90' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@reviews',
        'controller' => 'App\\Http\\Controllers\\HomeController@reviews',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TDt69EBJWgIceD90',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::51CJn572n4jI7oTD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'addreview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@addreview',
        'controller' => 'App\\Http\\Controllers\\HomeController@addreview',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::51CJn572n4jI7oTD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XsghLhHAQM5Xw1u2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@faq',
        'controller' => 'App\\Http\\Controllers\\HomeController@faq',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XsghLhHAQM5Xw1u2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0UkfnTsjeR5JK5NK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@documents',
        'controller' => 'App\\Http\\Controllers\\HomeController@documents',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0UkfnTsjeR5JK5NK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LKKZeLCikBtfCiz2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'download/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@download',
        'controller' => 'App\\Http\\Controllers\\HomeController@download',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LKKZeLCikBtfCiz2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PaUAMTDgZJgUVbpS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'login',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@register',
        'controller' => 'App\\Http\\Controllers\\HomeController@register',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PaUAMTDgZJgUVbpS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8AJVI3o0MNevDkfR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@school',
        'controller' => 'App\\Http\\Controllers\\HomeController@school',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8AJVI3o0MNevDkfR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pN9ToRHPXbeTaNw5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\statesController@view',
        'controller' => 'App\\Http\\Controllers\\statesController@view',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pN9ToRHPXbeTaNw5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hqDPKXmwHWLa5XtX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tutorial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@tutorial',
        'controller' => 'App\\Http\\Controllers\\HomeController@tutorial',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hqDPKXmwHWLa5XtX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9GPAsHrSaR1oxv4k' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'regeneratetopics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@RandomTopics',
        'controller' => 'App\\Http\\Controllers\\HomeController@RandomTopics',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9GPAsHrSaR1oxv4k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sg83zb8E4IbNFWB4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'isg',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@IsgTopicGenerator',
        'controller' => 'App\\Http\\Controllers\\HomeController@IsgTopicGenerator',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sg83zb8E4IbNFWB4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Sn9gzTeQoRX9QrOr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'extemp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@extempTopicGenerator',
        'controller' => 'App\\Http\\Controllers\\HomeController@extempTopicGenerator',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Sn9gzTeQoRX9QrOr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gg4ptHdWrqJpXDmr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'freeresources',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@freeResources',
        'controller' => 'App\\Http\\Controllers\\HomeController@freeResources',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Gg4ptHdWrqJpXDmr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6wsNE1QmD5c57MK5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'links',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@getResources',
        'controller' => 'App\\Http\\Controllers\\HomeController@getResources',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6wsNE1QmD5c57MK5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.services' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@services',
        'controller' => 'App\\Http\\Controllers\\HomeController@services',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.services',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wqKSTey128g6vb7m' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'login',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@login',
        'controller' => 'App\\Http\\Controllers\\HomeController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wqKSTey128g6vb7m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5XD3Iv3PocmdnGB8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contactUS',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\contactusController@saveContactUs',
        'controller' => 'App\\Http\\Controllers\\contactusController@saveContactUs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5XD3Iv3PocmdnGB8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C8moXMU9Mm3g2UBq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'demosearch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@demoSearch',
        'controller' => 'App\\Http\\Controllers\\HomeController@demoSearch',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::C8moXMU9Mm3g2UBq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kiNb6PfeAOjw3y5Z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'demosearch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@demoSearchPost',
        'controller' => 'App\\Http\\Controllers\\HomeController@demoSearchPost',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kiNb6PfeAOjw3y5Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W9AfN3G0CYAuaaGs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\userController@logout',
        'controller' => 'App\\Http\\Controllers\\userController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::W9AfN3G0CYAuaaGs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sClMZjYcpHODt7Qi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear_view_cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:377:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:158:"function(){
    \\Artisan::call(\'route:cache\');
    \\Artisan::call(\'config:cache\');
    \\Artisan::call(\'cache:clear\');
    \\Artisan::call(\'view:clear\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000637cc6c20000000056b79548";}";s:4:"hash";s:44:"cDPYAFRr7eDgFOUfQCPJ2LhjmUGF4871C8gSOTw+g8A=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sClMZjYcpHODt7Qi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QHONHSGHyA4bV7zC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coach/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\CoachesController@Dashboard',
        'controller' => 'App\\Http\\Controllers\\CoachesController@Dashboard',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::QHONHSGHyA4bV7zC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ROFUeBOo821U4me6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coach/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\CoachesController@logout',
        'controller' => 'App\\Http\\Controllers\\CoachesController@logout',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::ROFUeBOo821U4me6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IoebbSipqoz7I2q2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coach/students',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\CoachesController@Students',
        'controller' => 'App\\Http\\Controllers\\CoachesController@Students',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::IoebbSipqoz7I2q2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jAsIvnMAJCPMxASk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coach/addstudent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\CoachesController@addStudent',
        'controller' => 'App\\Http\\Controllers\\CoachesController@addStudent',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::jAsIvnMAJCPMxASk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XNYnXBre9IqQEWOH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coach/savestudent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\CoachesController@saveStudent',
        'controller' => 'App\\Http\\Controllers\\CoachesController@saveStudent',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::XNYnXBre9IqQEWOH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PD3wn1sDdBakNEhq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coach/editstudent/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\CoachesController@editStudent',
        'controller' => 'App\\Http\\Controllers\\CoachesController@editStudent',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::PD3wn1sDdBakNEhq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8pkfVodzpoFiLBNt' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'coach/updatestudent/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\CoachesController@updateStudent',
        'controller' => 'App\\Http\\Controllers\\CoachesController@updateStudent',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::8pkfVodzpoFiLBNt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CMHXkdWBYV5RKJ4g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coach/deletestudent/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\CoachesController@DeleteStudent',
        'controller' => 'App\\Http\\Controllers\\CoachesController@DeleteStudent',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::CMHXkdWBYV5RKJ4g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QupQAsmumuAwKKlS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coach/editProfile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@editProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@editProfile',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::QupQAsmumuAwKKlS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4Dxs6EzC89hBuvHz' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'coach/updateProfile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@updateprofile',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@updateprofile',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::4Dxs6EzC89hBuvHz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'createTransaction' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coach/create-transaction',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\Paypal\\PayPalController@createTransaction',
        'controller' => 'App\\Http\\Controllers\\Paypal\\PayPalController@createTransaction',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'createTransaction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'processTransaction' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coach/process-transaction',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\Paypal\\PayPalController@processTransaction',
        'controller' => 'App\\Http\\Controllers\\Paypal\\PayPalController@processTransaction',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'processTransaction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'successTransaction' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coach/success-transaction',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\Paypal\\PayPalController@successTransaction',
        'controller' => 'App\\Http\\Controllers\\Paypal\\PayPalController@successTransaction',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'successTransaction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cancelTransaction' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coach/cancel-transaction',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\Paypal\\PayPalController@cancelTransaction',
        'controller' => 'App\\Http\\Controllers\\Paypal\\PayPalController@cancelTransaction',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'cancelTransaction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'submitcheque' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coach/submitcheque',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\cheque\\ChequeController@submitcheque',
        'controller' => 'App\\Http\\Controllers\\cheque\\ChequeController@submitcheque',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'submitcheque',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coachmembership' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coach/user-membership',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MembershipController@coachMemberships',
        'controller' => 'App\\Http\\Controllers\\Admin\\MembershipController@coachMemberships',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'coachmembership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q8veqnWKqbIavEUh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coach/vault',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CoachController@getData',
        'controller' => 'App\\Http\\Controllers\\Admin\\CoachController@getData',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::q8veqnWKqbIavEUh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lfbJHQGEAO4b3RhY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coach/coach_folder_data/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\VaultController@getFolderData',
        'controller' => 'App\\Http\\Controllers\\VaultController@getFolderData',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::lfbJHQGEAO4b3RhY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IHirKCwP1QtXegzN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coach/extemp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@extempTopicGenerator',
        'controller' => 'App\\Http\\Controllers\\HomeController@extempTopicGenerator',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::IHirKCwP1QtXegzN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M0zfw5jMXkb4z8sG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coach/extemp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@extempTopicGeneratorPost',
        'controller' => 'App\\Http\\Controllers\\HomeController@extempTopicGeneratorPost',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::M0zfw5jMXkb4z8sG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R6DU7xUPS1yWyQC1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coach/printdomestic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\CoachesController@printDomesticTopic',
        'controller' => 'App\\Http\\Controllers\\CoachesController@printDomesticTopic',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::R6DU7xUPS1yWyQC1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4GjnMlllE9jCvS1k' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coach/printforiegn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\CoachesController@printForiegnTopic',
        'controller' => 'App\\Http\\Controllers\\CoachesController@printForiegnTopic',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::4GjnMlllE9jCvS1k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::walMVwMBHApzTT8p' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coach/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\CoachesController@demoSearch',
        'controller' => 'App\\Http\\Controllers\\CoachesController@demoSearch',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::walMVwMBHApzTT8p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6gdjsB6uCbgkOwyT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coach/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\CoachesController@demoSearchPost',
        'controller' => 'App\\Http\\Controllers\\CoachesController@demoSearchPost',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::6gdjsB6uCbgkOwyT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lDJhSAoqe3yAWkN8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coach/searchprints',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\CoachesController@demoSearchPrint',
        'controller' => 'App\\Http\\Controllers\\CoachesController@demoSearchPrint',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::lDJhSAoqe3yAWkN8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zAVCKTqtKv8RBq2D' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coach/searchprint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'coach',
        ),
        'uses' => 'App\\Http\\Controllers\\CoachesController@demoSearchPrint',
        'controller' => 'App\\Http\\Controllers\\CoachesController@demoSearchPrint',
        'namespace' => NULL,
        'prefix' => '/coach',
        'where' => 
        array (
        ),
        'as' => 'generated::zAVCKTqtKv8RBq2D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A6iWhieQwso7DtP8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'student/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\StudentsController@Dashboard',
        'controller' => 'App\\Http\\Controllers\\StudentsController@Dashboard',
        'namespace' => NULL,
        'prefix' => '/student',
        'where' => 
        array (
        ),
        'as' => 'generated::A6iWhieQwso7DtP8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iDI8t7jRjxpE2LAj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'student/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\StudentsController@logout',
        'controller' => 'App\\Http\\Controllers\\StudentsController@logout',
        'namespace' => NULL,
        'prefix' => '/student',
        'where' => 
        array (
        ),
        'as' => 'generated::iDI8t7jRjxpE2LAj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L9UeWSOCcO8XVJcH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'student/extemp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@extempTopicGenerator',
        'controller' => 'App\\Http\\Controllers\\HomeController@extempTopicGenerator',
        'namespace' => NULL,
        'prefix' => '/student',
        'where' => 
        array (
        ),
        'as' => 'generated::L9UeWSOCcO8XVJcH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4aHgBwzOCrXuGbhC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'student/extemp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@extempTopicGeneratorPost',
        'controller' => 'App\\Http\\Controllers\\HomeController@extempTopicGeneratorPost',
        'namespace' => NULL,
        'prefix' => '/student',
        'where' => 
        array (
        ),
        'as' => 'generated::4aHgBwzOCrXuGbhC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lhJPa1mEPRZa0Ph3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'student/vault',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'student',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CoachController@getData',
        'controller' => 'App\\Http\\Controllers\\Admin\\CoachController@getData',
        'namespace' => NULL,
        'prefix' => '/student',
        'where' => 
        array (
        ),
        'as' => 'generated::lhJPa1mEPRZa0Ph3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.save' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\userController@registerUser',
        'controller' => 'App\\Http\\Controllers\\userController@registerUser',
        'namespace' => NULL,
        'prefix' => '/users',
        'where' => 
        array (
        ),
        'as' => 'user.save',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V4UMtsyO9wjRWBfV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\userController@loginUser',
        'controller' => 'App\\Http\\Controllers\\userController@loginUser',
        'namespace' => NULL,
        'prefix' => '/users',
        'where' => 
        array (
        ),
        'as' => 'generated::V4UMtsyO9wjRWBfV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
