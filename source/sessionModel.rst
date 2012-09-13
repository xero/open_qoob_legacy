Session Model
*************

.. php:class:: sessionModel

      session model
      SQL functions for managing sessions
      

      :author: xero harrison

      :copyright: creative commons - attribution-shareAlike 3.0 unported

      :version: 1.02

      :package: app

      :subpackage: models

   .. php:method:: session::__construct()

      constructor function
      sets the database adapter type to mySQL.

   .. php:method:: session::checkSession()

      check session
      check if a user has an existing session      

      :param string $id: session identifier
      
   .. php:method:: session::getSession()

      get session
      return a session from the database if the fingerprints match and has not expired

      :param string $id: session identifier
      :param string $fingerprint: unique user fingerprint
      :param int $expires epoch time

      :returns: array

   .. php:method:: session::addSession()

      add session
      add a new session to the database

      :param string $session_id: session identifier
      :param string $qoob_id: qoob session identifier
      :param string $fingerprint: unique user fingerprint
      :param int $expires epoch time
      :param string $data JSON encoded session contents

      :returns: array

   .. php:method:: session::modSession()

      modify session
      modify an existing session

      :param string $id: session identifier
      :param int $expires epoch time
      :param string $data JSON encoded session contents

      :returns: array

   .. php:method:: session::delSession()

      delete session
      delete a session

      :param string $id: session identifier

   .. php:method:: session::cleanSessions()

      clean sessions
      deletes old sessions from the database

      :param int $expires: epoch time

      
   .. php:method:: session::countUsers()

      count users
      returns a count of the total number of active sessions

      :param int $expires: epoch time

      :returns: array

      

      