<?php

// Start of PDO v.1.0.4dev

/**
 * Represents an error raised by PDO. You should not throw a
 * <b>PDOException</b> from your own code.
 * @see https://php.net/manual/en/language.exceptions.php Exceptions in PHP
 * @link https://php.net/manual/en/class.pdoexception.php
 */
class PDOException extends RuntimeException  {
	public $errorInfo;
}

/**
 * Represents a connection between PHP and a database server.
 * @link https://php.net/manual/en/class.pdo.php
 */
class PDO  {

	/**
	 * Represents a boolean data type.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.param-bool
	 */
	const PARAM_BOOL = 5;

	/**
	 * Represents the SQL NULL data type.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.param-null
	 */
	const PARAM_NULL = 0;

	/**
	 * Represents the SQL INTEGER data type.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.param-int
	 */
	const PARAM_INT = 1;

	/**
	 * Represents the SQL CHAR, VARCHAR, or other string data type.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.param-str
	 */
	const PARAM_STR = 2;

	/**
	 * Flag to denote a string uses the national character set.
	 * @since 7.2
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.param-str-natl
	 */
	const PARAM_STR_NATL = 1073741824;

	/**
	 * Flag to denote a string uses the regular character set.
	 * @since 7.2
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.param-str-char
	 */
	const PARAM_STR_CHAR = 536870912;

	/**
	 * Sets the default string parameter type, this can be one of PDO::PARAM_STR_NATL and PDO::PARAM_STR_CHAR.
	 * @since 7.2
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-default-str-param
	 */
	const ATTR_DEFAULT_STR_PARAM = 21;

	/**
	 * Specifies that a function created with PDO::sqliteCreateFunction() is deterministic, i.e. it always returns the same result given the same inputs within a single SQL statement.
	 * @since 7.1.4
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.sqlite-deterministic
	 */
	const SQLITE_DETERMINISTIC = 2048;

	/**
	 * @since 7.3
	 */
	const SQLITE_OPEN_READONLY = 1;

	/**
	 * @since 7.3
	 */
	const SQLITE_OPEN_READWRITE = 2;

	/**
	 * @since 7.3
	 */
	const SQLITE_OPEN_CREATE = 4;

	/**
	 * @since 7.3
	 */
	const SQLITE_ATTR_OPEN_FLAGS = 1000;

	/**
	 * Represents the SQL large object data type.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.param-lob
	 */
	const PARAM_LOB = 3;

	/**
	 * Represents a recordset type. Not currently supported by any drivers.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.param-stmt
	 */
	const PARAM_STMT = 4;

	/**
	 * Specifies that the parameter is an INOUT parameter for a stored
	 * procedure. You must bitwise-OR this value with an explicit
	 * PDO::PARAM_* data type.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.param-input-output
	 */
	const PARAM_INPUT_OUTPUT = 2147483648;

	/**
	 * Allocation event
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-alloc
	 */
	const PARAM_EVT_ALLOC = 0;

	/**
	 * Deallocation event
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-free
	 */
	const PARAM_EVT_FREE = 1;

	/**
	 * Event triggered prior to execution of a prepared statement.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-exec-pre
	 */
	const PARAM_EVT_EXEC_PRE = 2;

	/**
	 * Event triggered subsequent to execution of a prepared statement.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-exec-post
	 */
	const PARAM_EVT_EXEC_POST = 3;

	/**
	 * Event triggered prior to fetching a result from a resultset.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-fetch-pre
	 */
	const PARAM_EVT_FETCH_PRE = 4;

	/**
	 * Event triggered subsequent to fetching a result from a resultset.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-fetch-post
	 */
	const PARAM_EVT_FETCH_POST = 5;

	/**
	 * Event triggered during bound parameter registration
	 * allowing the driver to normalize the parameter name.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.param-evt-normalize
	 */
	const PARAM_EVT_NORMALIZE = 6;

	/**
	 * Specifies that the fetch method shall return each row as an object with
	 * variable names that correspond to the column names returned in the result
	 * set. <b>PDO::FETCH_LAZY</b> creates the object variable names as they are accessed.
	 * Not valid inside <b>PDOStatement::fetchAll</b>.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-lazy
	 */
	const FETCH_LAZY = 1;

	/**
	 * Specifies that the fetch method shall return each row as an array indexed
	 * by column name as returned in the corresponding result set. If the result
	 * set contains multiple columns with the same name,
	 * <b>PDO::FETCH_ASSOC</b> returns
	 * only a single value per column name.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-assoc
	 */
	const FETCH_ASSOC = 2;

	/**
	 * Specifies that the fetch method shall return each row as an array indexed
	 * by column number as returned in the corresponding result set, starting at
	 * column 0.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-num
	 */
	const FETCH_NUM = 3;

	/**
	 * Specifies that the fetch method shall return each row as an array indexed
	 * by both column name and number as returned in the corresponding result set,
	 * starting at column 0.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-both
	 */
	const FETCH_BOTH = 4;

	/**
	 * Specifies that the fetch method shall return each row as an object with
	 * property names that correspond to the column names returned in the result
	 * set.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-obj
	 */
	const FETCH_OBJ = 5;

	/**
	 * Specifies that the fetch method shall return TRUE and assign the values of
	 * the columns in the result set to the PHP variables to which they were
	 * bound with the <b>PDOStatement::bindParam</b> or
	 * <b>PDOStatement::bindColumn</b> methods.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-bound
	 */
	const FETCH_BOUND = 6;

	/**
	 * Specifies that the fetch method shall return only a single requested
	 * column from the next row in the result set.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-column
	 */
	const FETCH_COLUMN = 7;

	/**
	 * Specifies that the fetch method shall return a new instance of the
	 * requested class, mapping the columns to named properties in the class.
	 * The magic
	 * <b>__set</b>
	 * method is called if the property doesn't exist in the requested class
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-class
	 */
	const FETCH_CLASS = 8;

	/**
	 * Specifies that the fetch method shall update an existing instance of the
	 * requested class, mapping the columns to named properties in the class.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-into
	 */
	const FETCH_INTO = 9;

	/**
	 * Allows completely customize the way data is treated on the fly (only
	 * valid inside <b>PDOStatement::fetchAll</b>).
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-func
	 */
	const FETCH_FUNC = 10;

	/**
	 * Group return by values. Usually combined with
	 * <b>PDO::FETCH_COLUMN</b> or
	 * <b>PDO::FETCH_KEY_PAIR</b>.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-group
	 */
	const FETCH_GROUP = 65536;

	/**
	 * Fetch only the unique values.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-unique
	 */
	const FETCH_UNIQUE = 196608;

	/**
	 * Fetch a two-column result into an array where the first column is a key and the second column
	 * is the value.
	 * @since 5.2.3
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-key-pair
	 */
	const FETCH_KEY_PAIR = 12;

	/**
	 * Determine the class name from the value of first column.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-classtype
	 */
	const FETCH_CLASSTYPE = 262144;

	/**
	 * As <b>PDO::FETCH_INTO</b> but object is provided as a serialized string.
	 * Available since PHP 5.1.0. Since PHP 5.3.0 the class constructor is never called if this
	 * flag is set.
	 * @since 5.1 Available
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-serialize
	 */
	const FETCH_SERIALIZE = 524288;

	/**
	 * Call the constructor before setting properties.
	 * @since 5.2.0
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-props-late
	 */
	const FETCH_PROPS_LATE = 1048576;

	/**
	 * Specifies that the fetch method shall return each row as an array indexed
	 * by column name as returned in the corresponding result set. If the result
	 * set contains multiple columns with the same name,
	 * <b>PDO::FETCH_NAMED</b> returns
	 * an array of values per column name.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-named
	 */
	const FETCH_NAMED = 11;

	/**
	 * If this value is <b>FALSE</b>, PDO attempts to disable autocommit so that the
	 * connection begins a transaction.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-autocommit
	 */
	const ATTR_AUTOCOMMIT = 0;

	/**
	 * Setting the prefetch size allows you to balance speed against memory
	 * usage for your application. Not all database/driver combinations support
	 * setting of the prefetch size. A larger prefetch size results in
	 * increased performance at the cost of higher memory usage.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-prefetch
	 */
	const ATTR_PREFETCH = 1;

	/**
	 * Sets the timeout value in seconds for communications with the database.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-timeout
	 */
	const ATTR_TIMEOUT = 2;

	/**
	 * @see https://php.net/manual/en/pdo.error-handling.php Errors and error handling
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-errmode
	 */
	const ATTR_ERRMODE = 3;

	/**
	 * This is a read only attribute; it will return information about the
	 * version of the database server to which PDO is connected.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-
	 */
	const ATTR_SERVER_VERSION = 4;

	/**
	 * This is a read only attribute; it will return information about the
	 * version of the client libraries that the PDO driver is using.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-client-version
	 */
	const ATTR_CLIENT_VERSION = 5;

	/**
	 * This is a read only attribute; it will return some meta information about the
	 * database server to which PDO is connected.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-server-info
	 */
	const ATTR_SERVER_INFO = 6;
	const ATTR_CONNECTION_STATUS = 7;

	/**
	 * Force column names to a specific case specified by the PDO::CASE_*
	 * constants.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-case
	 */
	const ATTR_CASE = 8;

	/**
	 * Get or set the name to use for a cursor. Most useful when using
	 * scrollable cursors and positioned updates.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-cursor-name
	 */
	const ATTR_CURSOR_NAME = 9;

	/**
	 * Selects the cursor type. PDO currently supports either
	 * <b>PDO::CURSOR_FWDONLY</b> and
	 * <b>PDO::CURSOR_SCROLL</b>. Stick with
	 * <b>PDO::CURSOR_FWDONLY</b> unless you know that you need a
	 * scrollable cursor.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-cursor
	 */
	const ATTR_CURSOR = 10;

	/**
	 * Convert empty strings to SQL NULL values on data fetches.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-oracle-nulls
	 */
	const ATTR_ORACLE_NULLS = 11;

	/**
	 * Request a persistent connection, rather than creating a new connection.
	 * @see https://php.net/manual/en/pdo.connections.php Connections and Connection Management
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-persistent
	 */
	const ATTR_PERSISTENT = 12;

	/**
	 * Sets the class name of which statements are returned as.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-statement-class
	 */
	const ATTR_STATEMENT_CLASS = 13;

	/**
	 * Prepend the containing table name to each column name returned in the
	 * result set. The table name and column name are separated by a decimal (.)
	 * character. Support of this attribute is at the driver level; it may not
	 * be supported by your driver.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-fetch-table-names
	 */
	const ATTR_FETCH_TABLE_NAMES = 14;

	/**
	 * Prepend the containing catalog name to each column name returned in the
	 * result set. The catalog name and column name are separated by a decimal
	 * (.) character. Support of this attribute is at the driver level; it may
	 * not be supported by your driver.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-fetch-catalog-names
	 */
	const ATTR_FETCH_CATALOG_NAMES = 15;

	/**
	 * Returns the name of the driver.
	 * <p>
	 * using <b>PDO::ATTR_DRIVER_NAME</b>
	 * <code>
	 * if ($db->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {
	 * echo "Running on mysql; doing something mysql specific here\n";
	 * }
	 * </code>
	 * </p>
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-driver-name
	 */
	const ATTR_DRIVER_NAME = 16;

	/**
	 * Forces all values fetched to be treated as strings.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-stringify-fetches
	 */
	const ATTR_STRINGIFY_FETCHES = 17;

	/**
	 * Sets the maximum column name length.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-max-column-len
	 */
	const ATTR_MAX_COLUMN_LEN = 18;

	/**
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-emulate-prepares
	 * @since 5.1.3
	 */
	const ATTR_EMULATE_PREPARES = 20;

	/**
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.attr-default-fetch-mode
	 * @since 5.2.0
	 */
	const ATTR_DEFAULT_FETCH_MODE = 19;

	/**
	 * Do not raise an error or exception if an error occurs. The developer is
	 * expected to explicitly check for errors. This is the default mode.
	 * @see https://php.net/manual/en/pdo.error-handling.php  Errors and Error Handling
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.errmode-silent
	 */
	const ERRMODE_SILENT = 0;

	/**
	 * Issue a PHP <b>E_WARNING</b> message if an error occurs.
	 * @see https://php.net/manual/en/pdo.error-handling.php  Errors and Error Handling
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.errmode-warning
	 */
	const ERRMODE_WARNING = 1;

	/**
	 * Throw a <b>PDOException</b> if an error occurs.
	 * @see https://php.net/manual/en/pdo.error-handling.php  Errors and Error Handling
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.errmode-exception
	 */
	const ERRMODE_EXCEPTION = 2;

	/**
	 * Leave column names as returned by the database driver.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.case-natural
	 */
	const CASE_NATURAL = 0;

	/**
	 * Force column names to lower case.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.case-lower
	 */
	const CASE_LOWER = 2;

	/**
	 * Force column names to upper case.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.case-upper
	 */
	const CASE_UPPER = 1;

	/**
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.null-natural
	 */
	const NULL_NATURAL = 0;

	/**
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.null-empty-string
	 */
	const NULL_EMPTY_STRING = 1;

	/**
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.null-to-string
	 */
	const NULL_TO_STRING = 2;

	/**
	 * Corresponds to SQLSTATE '00000', meaning that the SQL statement was
	 * successfully issued with no errors or warnings. This constant is for
	 * your convenience when checking <b>PDO::errorCode</b> or
	 * <b>PDOStatement::errorCode</b> to determine if an error
	 * occurred. You will usually know if this is the case by examining the
	 * return code from the method that raised the error condition anyway.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.err-none
	 */
	const ERR_NONE = 00000;

	/**
	 * Fetch the next row in the result set. Valid only for scrollable cursors.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-ori-next
	 */
	const FETCH_ORI_NEXT = 0;

	/**
	 * Fetch the previous row in the result set. Valid only for scrollable
	 * cursors.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-ori-prior
	 */
	const FETCH_ORI_PRIOR = 1;

	/**
	 * Fetch the first row in the result set. Valid only for scrollable cursors.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-ori-first
	 */
	const FETCH_ORI_FIRST = 2;

	/**
	 * Fetch the last row in the result set. Valid only for scrollable cursors.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-ori-last
	 */
	const FETCH_ORI_LAST = 3;

	/**
	 * Fetch the requested row by row number from the result set. Valid only
	 * for scrollable cursors.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-ori-abs
	 */
	const FETCH_ORI_ABS = 4;

	/**
	 * Fetch the requested row by relative position from the current position
	 * of the cursor in the result set. Valid only for scrollable cursors.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.fetch-ori-rel
	 */
	const FETCH_ORI_REL = 5;

	/**
	 * Create a <b>PDOStatement</b> object with a forward-only cursor. This is the
	 * default cursor choice, as it is the fastest and most common data access
	 * pattern in PHP.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.cursor-fwdonly
	 */
	const CURSOR_FWDONLY = 0;

	/**
	 * Create a <b>PDOStatement</b> object with a scrollable cursor. Pass the
	 * PDO::FETCH_ORI_* constants to control the rows fetched from the result set.
	 * @link https://php.net/manual/en/pdo.constants.php#pdo.constants.cursor-scroll
	 */
	const CURSOR_SCROLL = 1;

	/**
	 * If this attribute is set to <b>TRUE</b> on a
	 * <b>PDOStatement</b>, the MySQL driver will use the
	 * buffered versions of the MySQL API. If you're writing portable code, you
	 * should use <b>PDOStatement::fetchAll</b> instead.
	 * <p>
	 * Forcing queries to be buffered in mysql
	 * <code>
	 * if ($db->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {
	 * $stmt = $db->prepare('select * from foo',
	 * array(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true));
	 * } else {
	 * die("my application only works with mysql; I should use \$stmt->fetchAll() instead");
	 * }
	 * </code>
	 * </p>
	 * @link https://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-use-buffered-query
	 */
	const MYSQL_ATTR_USE_BUFFERED_QUERY = 1000;

	/**
	 * <p>
	 * Enable LOAD LOCAL INFILE.
	 * </p>
	 * <p>
	 * Note, this constant can only be used in the <i>driver_options</i>
	 * array when constructing a new database handle.
	 * </p>
	 * @link https://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-local-infile
	 */
	const MYSQL_ATTR_LOCAL_INFILE = 1001;

	/**
	 * <p>
	 * Command to execute when connecting to the MySQL server. Will
	 * automatically be re-executed when reconnecting.
	 * </p>
	 * <p>
	 * Note, this constant can only be used in the <i>driver_options</i>
	 * array when constructing a new database handle.
	 * </p>
	 * @link https://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-init-command
	 */
	const MYSQL_ATTR_INIT_COMMAND = 1002;

	/**
	 * <p>
	 * Maximum buffer size. Defaults to 1 MiB. This constant is not supported when
	 * compiled against mysqlnd.
	 * </p>
	 * @link https://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-max-buffer-size
	 */
	const MYSQL_ATTR_MAX_BUFFER_SIZE = 1005;

	/**
	 * <p>
	 * Read options from the named option file instead of from
	 * my.cnf. This option is not available if
	 * mysqlnd is used, because mysqlnd does not read the mysql
	 * configuration files.
	 * </p>
	 * @link https://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-read-default-file
	 */
	const MYSQL_ATTR_READ_DEFAULT_FILE = 1003;

	/**
	 * <p>
	 * Read options from the named group from my.cnf or the
	 * file specified with <b>MYSQL_READ_DEFAULT_FILE</b>. This option
	 * is not available if mysqlnd is used, because mysqlnd does not read the mysql
	 * configuration files.
	 * </p>
	 * @link https://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-read-default-group
	 */
	const MYSQL_ATTR_READ_DEFAULT_GROUP = 1004;

	/**
	 * <p>
	 * Enable network communication compression. This is not supported when
	 * compiled against mysqlnd.
	 * </p>
	 * @link https://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-compress
	 */
	const MYSQL_ATTR_COMPRESS = 1006;

	/**
	 * <p>
	 * Perform direct queries, don't use prepared statements.
	 * </p>
	 * @link https://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-direct-query
	 */
	const MYSQL_ATTR_DIRECT_QUERY = 1007;

	/**
	 * <p>
	 * Return the number of found (matched) rows, not the
	 * number of changed rows.
	 * </p>
	 * @link https://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-found-rows
	 */
	const MYSQL_ATTR_FOUND_ROWS = 1008;

	/**
	 * <p>
	 * Permit spaces after function names. Makes all functions
	 * names reserved words.
	 * </p>
	 * @link https://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-ignore-space
	 */
	const MYSQL_ATTR_IGNORE_SPACE = 1009;

	const MYSQL_ATTR_SERVER_PUBLIC_KEY = 1009;

	/**
	 * <p>
	 * The file path to the SSL key.
	 * </p>
	 * @since 5.3.7
	 * @link https://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-ssl-key
	 */
	const MYSQL_ATTR_SSL_KEY = 1010;

	/**
	 * <p>
	 * The file path to the SSL certificate.
	 * </p>
	 * @since 5.3.7
	 * @link https://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-ssl-cert
	 */
	const MYSQL_ATTR_SSL_CERT = 1011;

	/**
	 * <p>
	 * The file path to the SSL certificate authority.
	 * </p>
	 * @since 5.3.7
	 * @link https://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-ssl-ca
	 */
	const MYSQL_ATTR_SSL_CA = 1012;

	/**
	 * <p>
	 * The file path to the directory that contains the trusted SSL
	 * CA certificates, which are stored in PEM format.
	 * </p>
	 * @since 5.3.7
	 * @link https://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-ssl-capath
	 */
	const MYSQL_ATTR_SSL_CAPATH = 1013;

	/**
	 * <p>
	 * A list of one or more permissible ciphers to use for SSL encryption,
	 * in a format understood by OpenSSL.
	 * For example: DHE-RSA-AES256-SHA:AES128-SHA
	 * </p>
	 * @since 5.3.7
	 * @link https://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-cipher
	 */
	const MYSQL_ATTR_SSL_CIPHER = 1014;

	/**
	 * <p>
	 * Disables multi query execution in both {@see PDO::prepare()} and {@see PDO::query()} when set to FALSE.
	 * </p>
	 * <p>
	 * Note, this constant can only be used in the driver_options array when constructing a new database handle.
	 * </p>
	 * @since 5.5.21 and 5.6.5
	 * @link https://php.net/manual/en/ref.pdo-mysql.php#pdo.constants.mysql-attr-multi-statements
	 */
	const MYSQL_ATTR_MULTI_STATEMENTS = 1015;

	/**
	 * <p>
	 * Disables SSL peer verification when set to FALSE.
	 * </p>
	 * @since 7.0.18
	 * @since 7.1.4
	 * @link https://bugs.php.net/bug.php?id=71003
	 */
	const MYSQL_ATTR_SSL_VERIFY_SERVER_CERT = 1016;

	/**
	 * @deprecated 5.6.0 Use PDO::ATTR_EMULATE_PREPARES instead.
	 */
	const PGSQL_ASSOC = 1;
	const PGSQL_ATTR_DISABLE_NATIVE_PREPARED_STATEMENT = 1000;
	const PGSQL_BAD_RESPONSE = 5;
	const PGSQL_BOTH = 3;
	const PGSQL_TRANSACTION_IDLE = 0;
	const PGSQL_TRANSACTION_ACTIVE = 1;
	const PGSQL_TRANSACTION_INTRANS = 2;
	const PGSQL_TRANSACTION_INERROR = 3;
	const PGSQL_TRANSACTION_UNKNOWN = 4;

	const PGSQL_CONNECT_ASYNC = 4;
	const PGSQL_CONNECT_FORCE_NEW = 2;
	const PGSQL_CONNECTION_AUTH_OK = 5;
	const PGSQL_CONNECTION_AWAITING_RESPONSE = 4;
	const PGSQL_CONNECTION_BAD = 1;
	const PGSQL_CONNECTION_OK = 0;
	const PGSQL_CONNECTION_MADE = 3;
	const PGSQL_CONNECTION_SETENV = 6;
	const PGSQL_CONNECTION_SSL_STARTUP = 7;
	const PGSQL_CONNECTION_STARTED = 2;
	const PGSQL_COMMAND_OK = 1;
	const PGSQL_CONV_FORCE_NULL = 4;
	const PGSQL_CONV_IGNORE_DEFAULT = 2;
	const PGSQL_CONV_IGNORE_NOT_NULL = 8;
	const PGSQL_COPY_IN = 4;
	const PGSQL_COPY_OUT = 3;
	const PGSQL_DIAG_CONTEXT = 87;
	const PGSQL_DIAG_INTERNAL_POSITION = 112;
	const PGSQL_DIAG_INTERNAL_QUERY = 113;
	const PGSQL_DIAG_MESSAGE_DETAIL = 68;
	const PGSQL_DIAG_MESSAGE_HINT = 72;
	const PGSQL_DIAG_MESSAGE_PRIMARY = 77;
	const PGSQL_DIAG_SEVERITY = 83;
	const PGSQL_DIAG_SOURCE_FILE = 70;
	const PGSQL_DIAG_SOURCE_FUNCTION = 82;
	const PGSQL_DIAG_SOURCE_LINE = 76;
	const PGSQL_DIAG_SQLSTATE = 67;
	const PGSQL_DIAG_STATEMENT_POSITION = 80;
	const PGSQL_DML_ASYNC = 1024;
	const PGSQL_DML_EXEC = 512;
	const PGSQL_DML_NO_CONV = 256;
	const PGSQL_DML_STRING = 2048;
	const PGSQL_DML_ESCAPE = 4096;
	const PGSQL_EMPTY_QUERY = 0;
	const PGSQL_ERRORS_DEFAULT = 1;
	const PGSQL_ERRORS_TERSE = 0;
	const PGSQL_ERRORS_VERBOSE = 2;
	const PGSQL_FATAL_ERROR = 7;
	const PGSQL_NONFATAL_ERROR = 6;
	const PGSQL_NOTICE_ALL = 2;
	const PGSQL_NOTICE_CLEAR = 3;
	const PGSQL_NOTICE_LAST = 1;
	const PGSQL_NUM = 2;
	const PGSQL_POLLING_ACTIVE = 4;
	const PGSQL_POLLING_FAILED = 0;
	const PGSQL_POLLING_OK = 3;
	const PGSQL_POLLING_READING = 1;
	const PGSQL_POLLING_WRITING = 2;
	const PGSQL_SEEK_CUR = 1;
	const PGSQL_SEEK_END = 2;
	const PGSQL_SEEK_SET = 0;
	const PGSQL_STATUS_LONG = 1;
	const PGSQL_STATUS_STRING = 2;
	const PGSQL_TUPLES_OK = 2;
	const SQLSRV_TXN_READ_UNCOMMITTED = "READ_UNCOMMITTED";
	const SQLSRV_TXN_READ_COMMITTED = "READ_COMMITTED";
	const SQLSRV_TXN_REPEATABLE_READ = "REPEATABLE_READ";
	const SQLSRV_TXN_SNAPSHOT = "SNAPSHOT";
	const SQLSRV_TXN_SERIALIZABLE = "SERIALIZABLE";
	const SQLSRV_ENCODING_BINARY = 2;
	const SQLSRV_ENCODING_SYSTEM = 3;
	const SQLSRV_ENCODING_UTF8 = 65001;
	const SQLSRV_ENCODING_DEFAULT = 1;
	const SQLSRV_ATTR_ENCODING = 1000;
	const SQLSRV_ATTR_QUERY_TIMEOUT = 1001;
	const SQLSRV_ATTR_DIRECT_QUERY = 1002;
	const SQLSRV_ATTR_CURSOR_SCROLL_TYPE = 1003;
	const SQLSRV_ATTR_CLIENT_BUFFER_MAX_KB_SIZE = 1004;
	const SQLSRV_ATTR_FETCHES_NUMERIC_TYPE = 1005;
	const SQLSRV_PARAM_OUT_DEFAULT_SIZE = -1;
	const SQLSRV_CURSOR_KEYSET = 1;
	const SQLSRV_CURSOR_DYNAMIC = 2;
	const SQLSRV_CURSOR_STATIC = 3;
	const SQLSRV_CURSOR_BUFFERED = 42;

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Creates a PDO instance representing a connection to a database
	 * @link https://php.net/manual/en/pdo.construct.php
	 * @param string $dsn
	 * @param string $username [optional]
	 * @param string $passwd [optional]
	 * @param array $options [optional]
	 * @throws PDOException if the attempt to connect to the requested database fails.
	 */
	public function __construct ($dsn, $username = null, $passwd = null, $options = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Prepares a statement for execution and returns a statement object
	 * @link https://php.net/manual/en/pdo.prepare.php
	 * @param string $statement <p>
	 * This must be a valid SQL statement for the target database server.
	 * </p>
	 * @param array $driver_options [optional] <p>
	 * This array holds one or more key=&gt;value pairs to set
	 * attribute values for the <b>PDOStatement</b> object that this method
	 * returns. You would most commonly use this to set the
	 * <b>PDO::ATTR_CURSOR</b> value to
	 * <b>PDO::CURSOR_SCROLL</b> to request a scrollable cursor.
	 * Some drivers have driver specific options that may be set at
	 * prepare-time.
	 * </p>
	 * @return PDOStatement|bool If the database server successfully prepares the statement,
	 * <b>PDO::prepare</b> returns a
	 * <b>PDOStatement</b> object.
	 * If the database server cannot successfully prepare the statement,
	 * <b>PDO::prepare</b> returns <b>FALSE</b> or emits
	 * <b>PDOException</b> (depending on error handling).
	 * </p>
	 * <p>
	 * Emulated prepared statements does not communicate with the database server
	 * so <b>PDO::prepare</b> does not check the statement.
	 */
	public function prepare ($statement, array $driver_options = array()) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Initiates a transaction
	 * <p>
	 * Turns off autocommit mode. While autocommit mode is turned off,
	 * changes made to the database via the PDO object instance are not committed
	 * until you end the transaction by calling {@link PDO::commit()}.
	 * Calling {@link PDO::rollBack()} will roll back all changes to the database and
	 * return the connection to autocommit mode.
	 * </p>
	 * <p>
	 * Some databases, including MySQL, automatically issue an implicit COMMIT
	 * when a database definition language (DDL) statement
	 * such as DROP TABLE or CREATE TABLE is issued within a transaction.
	 * The implicit COMMIT will prevent you from rolling back any other changes
	 * within the transaction boundary.
	 * </p>
	 * @link https://php.net/manual/en/pdo.begintransaction.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @throws PDOException If there is already a transaction started or
	 * the driver does not support transactions <br/>
	 * <b>Note</b>: An exception is raised even when the <b>PDO::ATTR_ERRMODE</b>
	 * attribute is not <b>PDO::ERRMODE_EXCEPTION</b>.
	 */
	public function beginTransaction () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Commits a transaction
	 * @link https://php.net/manual/en/pdo.commit.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @throws PDOException if there is no active transaction.
	 */
	public function commit () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Rolls back a transaction
	 * @link https://php.net/manual/en/pdo.rollback.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @throws PDOException if there is no active transaction.
	 */
	public function rollBack () {}

	/**
	 * (PHP 5 &gt;= 5.3.3, Bundled pdo_pgsql, PHP 7)<br/>
	 * Checks if inside a transaction
	 * @link https://php.net/manual/en/pdo.intransaction.php
	 * @return bool <b>TRUE</b> if a transaction is currently active, and <b>FALSE</b> if not.
	 */
	public function inTransaction () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Set an attribute
	 * @link https://php.net/manual/en/pdo.setattribute.php
	 * @param int $attribute
	 * @param mixed $value
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setAttribute ($attribute, $value) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Execute an SQL statement and return the number of affected rows
	 * @link https://php.net/manual/en/pdo.exec.php
	 * @param string $statement <p>
	 * The SQL statement to prepare and execute.
	 * </p>
	 * <p>
	 * Data inside the query should be properly escaped.
	 * </p>
	 * @return int|false <b>PDO::exec</b> returns the number of rows that were modified
	 * or deleted by the SQL statement you issued. If no rows were affected,
	 * <b>PDO::exec</b> returns 0.
	 * </p>
	 * This function may
	 * return Boolean <b>FALSE</b>, but may also return a non-Boolean value which
	 * evaluates to <b>FALSE</b>. Please read the section on Booleans for more
	 * information. Use the ===
	 * operator for testing the return value of this
	 * function.
	 * <p>
	 * The following example incorrectly relies on the return value of
	 * <b>PDO::exec</b>, wherein a statement that affected 0 rows
	 * results in a call to <b>die</b>:
	 * <code>
	 * $db->exec() or die(print_r($db->errorInfo(), true));
	 * </code>
	 */
	public function exec ($statement) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * Executes an SQL statement, returning a result set as a PDOStatement object
	 * @link https://php.net/manual/en/pdo.query.php
	 * @param string $statement <p>
	 * The SQL statement to prepare and execute.
	 * </p>
	 * <p>
	 * Data inside the query should be properly escaped.
	 * </p>
	 * @param int $mode <p>
	 * The fetch mode must be one of the PDO::FETCH_* constants.
	 * </p>
	 * @param mixed $arg3 <p>
	 * The second and following parameters are the same as the parameters for PDOStatement::setFetchMode.
	 * </p>
	 * @param array $ctorargs [optional] <p>
	 * Arguments of custom class constructor when the <i>mode</i>
	 * parameter is set to <b>PDO::FETCH_CLASS</b>.
	 * </p>
	 * @return PDOStatement|false <b>PDO::query</b> returns a PDOStatement object, or <b>FALSE</b>
	 * on failure.
	 * @see PDOStatement::setFetchMode For a full description of the second and following parameters.
	 */
	public function query ($statement, $mode = PDO::ATTR_DEFAULT_FETCH_MODE, $arg3 = null, array $ctorargs = array()) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Returns the ID of the last inserted row or sequence value
	 * @link https://php.net/manual/en/pdo.lastinsertid.php
	 * @param string $name [optional] <p>
	 * Name of the sequence object from which the ID should be returned.
	 * </p>
	 * @return string If a sequence name was not specified for the <i>name</i>
	 * parameter, <b>PDO::lastInsertId</b> returns a
	 * string representing the row ID of the last row that was inserted into
	 * the database.
	 * </p>
	 * <p>
	 * If a sequence name was specified for the <i>name</i>
	 * parameter, <b>PDO::lastInsertId</b> returns a
	 * string representing the last value retrieved from the specified sequence
	 * object.
	 * </p>
	 * <p>
	 * If the PDO driver does not support this capability,
	 * <b>PDO::lastInsertId</b> triggers an
	 * IM001 SQLSTATE.
	 */
	public function lastInsertId ($name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Fetch the SQLSTATE associated with the last operation on the database handle
	 * @link https://php.net/manual/en/pdo.errorcode.php
	 * @return mixed an SQLSTATE, a five characters alphanumeric identifier defined in
	 * the ANSI SQL-92 standard. Briefly, an SQLSTATE consists of a
	 * two characters class value followed by a three characters subclass value. A
	 * class value of 01 indicates a warning and is accompanied by a return code
	 * of SQL_SUCCESS_WITH_INFO. Class values other than '01', except for the
	 * class 'IM', indicate an error. The class 'IM' is specific to warnings
	 * and errors that derive from the implementation of PDO (or perhaps ODBC,
	 * if you're using the ODBC driver) itself. The subclass value '000' in any
	 * class indicates that there is no subclass for that SQLSTATE.
	 * </p>
	 * <p>
	 * <b>PDO::errorCode</b> only retrieves error codes for operations
	 * performed directly on the database handle. If you create a PDOStatement
	 * object through <b>PDO::prepare</b> or
	 * <b>PDO::query</b> and invoke an error on the statement
	 * handle, <b>PDO::errorCode</b> will not reflect that error.
	 * You must call <b>PDOStatement::errorCode</b> to return the error
	 * code for an operation performed on a particular statement handle.
	 * </p>
	 * <p>
	 * Returns <b>NULL</b> if no operation has been run on the database handle.
	 */
	public function errorCode () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Fetch extended error information associated with the last operation on the database handle
	 * @link https://php.net/manual/en/pdo.errorinfo.php
	 * @return array <b>PDO::errorInfo</b> returns an array of error information
	 * about the last operation performed by this database handle. The array
	 * consists of the following fields:
	 * <tr valign="top">
	 * <td>Element</td>
	 * <td>Information</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>0</td>
	 * <td>SQLSTATE error code (a five characters alphanumeric identifier defined
	 * in the ANSI SQL standard).</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>1</td>
	 * <td>Driver-specific error code.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>2</td>
	 * <td>Driver-specific error message.</td>
	 * </tr>
	 * </p>
	 * <p>
	 * If the SQLSTATE error code is not set or there is no driver-specific
	 * error, the elements following element 0 will be set to <b>NULL</b>.
	 * </p>
	 * <p>
	 * <b>PDO::errorInfo</b> only retrieves error information for
	 * operations performed directly on the database handle. If you create a
	 * PDOStatement object through <b>PDO::prepare</b> or
	 * <b>PDO::query</b> and invoke an error on the statement
	 * handle, <b>PDO::errorInfo</b> will not reflect the error
	 * from the statement handle. You must call
	 * <b>PDOStatement::errorInfo</b> to return the error
	 * information for an operation performed on a particular statement handle.
	 */
	public function errorInfo () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * Retrieve a database connection attribute
	 * @link https://php.net/manual/en/pdo.getattribute.php
	 * @param int $attribute <p>
	 * One of the PDO::ATTR_* constants. The constants that
	 * apply to database connections are as follows:
	 * PDO::ATTR_AUTOCOMMIT
	 * PDO::ATTR_CASE
	 * PDO::ATTR_CLIENT_VERSION
	 * PDO::ATTR_CONNECTION_STATUS
	 * PDO::ATTR_DRIVER_NAME
	 * PDO::ATTR_ERRMODE
	 * PDO::ATTR_ORACLE_NULLS
	 * PDO::ATTR_PERSISTENT
	 * PDO::ATTR_PREFETCH
	 * PDO::ATTR_SERVER_INFO
	 * PDO::ATTR_SERVER_VERSION
	 * PDO::ATTR_TIMEOUT
	 * </p>
	 * @return mixed A successful call returns the value of the requested PDO attribute.
	 * An unsuccessful call returns null.
	 */
	public function getAttribute ($attribute) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.1)<br/>
	 * Quotes a string for use in a query.
	 * @link https://php.net/manual/en/pdo.quote.php
	 * @param string $string <p>
	 * The string to be quoted.
	 * </p>
	 * @param int $parameter_type [optional] <p>
	 * Provides a data type hint for drivers that have alternate quoting styles.
	 * </p>
	 * @return string|false a quoted string that is theoretically safe to pass into an
	 * SQL statement. Returns <b>FALSE</b> if the driver does not support quoting in
	 * this way.
	 */
	public function quote ($string, $parameter_type = PDO::PARAM_STR) {}

	final public function __wakeup () {}

	final public function __sleep () {}

	/**
	 * (PHP 5 &gt;= 5.1.3, PHP 7, PECL pdo &gt;= 1.0.3)<br/>
	 * Return an array of available PDO drivers
	 * @link https://php.net/manual/en/pdo.getavailabledrivers.php
	 * @return array <b>PDO::getAvailableDrivers</b> returns an array of PDO driver names. If
	 * no drivers are available, it returns an empty array.
	 */
	public static function getAvailableDrivers () {}

    /**
     * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo_sqlite &gt;= 1.0.0)<br/>
     * Registers a User Defined Function for use in SQL statements
     * @link https://php.net/manual/en/pdo.sqlitecreatefunction.php
     * @param string $function_name <p>
     * The name of the function used in SQL statements.
     * </p>
     * @param callable $callback <p>
     * Callback function to handle the defined SQL function.
     * </p>
     * @param int $num_args [optional] <p>
     * The number of arguments that the SQL function takes. If this parameter is -1,
     * then the SQL function may take any number of arguments.
     * </p>
     * @param int $flags [optional] <p>
     * A bitwise conjunction of flags. Currently, only <b>PDO::SQLITE_DETERMINISTIC</b> is supported,
     * which specifies that the function always returns the same result given the same inputs within
     * a single SQL statement.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    public function sqliteCreateFunction($function_name, $callback, $num_args = -1, $flags = 0) {}
}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 1.0.0)<br/>
 * Represents a prepared statement and, after the statement is executed, an
 * associated result set.
 * @link https://php.net/manual/en/class.pdostatement.php
 */
class PDOStatement implements Traversable {
	/**
	 * @var string
	 */
	public $queryString;


	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Executes a prepared statement
	 * @link https://php.net/manual/en/pdostatement.execute.php
	 * @param array $input_parameters [optional] <p>
	 * An array of values with as many elements as there are bound
	 * parameters in the SQL statement being executed.
	 * All values are treated as <b>PDO::PARAM_STR</b>.
	 * </p>
	 * <p>
	 * You cannot bind multiple values to a single parameter; for example,
	 * you cannot bind two values to a single named parameter in an IN()
	 * clause.
	 * </p>
	 * <p>
	 * You cannot bind more values than specified; if more keys exist in
	 * <i>input_parameters</i> than in the SQL specified
	 * in the <b>PDO::prepare</b>, then the statement will
	 * fail and an error is emitted.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * @throws \PDOException On error if PDO::ERRMODE_EXCEPTION option is true.
	 */
	public function execute ($input_parameters = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Fetches the next row from a result set
	 * @link https://php.net/manual/en/pdostatement.fetch.php
	 * @param int $fetch_style [optional] <p>
	 * Controls how the next row will be returned to the caller. This value
	 * must be one of the PDO::FETCH_* constants,
	 * defaulting to value of PDO::ATTR_DEFAULT_FETCH_MODE
	 * (which defaults to PDO::FETCH_BOTH).
	 * <p>
	 * PDO::FETCH_ASSOC: returns an array indexed by column
	 * name as returned in your result set
	 * </p>
	 * @param int $cursor_orientation [optional] <p>
	 * For a PDOStatement object representing a scrollable cursor, this
	 * value determines which row will be returned to the caller. This value
	 * must be one of the PDO::FETCH_ORI_* constants,
	 * defaulting to PDO::FETCH_ORI_NEXT. To request a
	 * scrollable cursor for your PDOStatement object, you must set the
	 * PDO::ATTR_CURSOR attribute to
	 * PDO::CURSOR_SCROLL when you prepare the SQL
	 * statement with <b>PDO::prepare</b>.
	 * </p>
	 * @param int $cursor_offset [optional]
	 * @return mixed The return value of this function on success depends on the fetch type. In
	 * all cases, <b>FALSE</b> is returned on failure.
	 */
	public function fetch ($fetch_style = null, $cursor_orientation = PDO::FETCH_ORI_NEXT, $cursor_offset = 0) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Binds a parameter to the specified variable name
	 * @link https://php.net/manual/en/pdostatement.bindparam.php
	 * @param mixed $parameter <p>
	 * Parameter identifier. For a prepared statement using named
	 * placeholders, this will be a parameter name of the form
	 * :name. For a prepared statement using
	 * question mark placeholders, this will be the 1-indexed position of
	 * the parameter.
	 * </p>
	 * @param mixed $variable <p>
	 * Name of the PHP variable to bind to the SQL statement parameter.
	 * </p>
	 * @param int $data_type [optional] <p>
	 * Explicit data type for the parameter using the PDO::PARAM_*
	 * constants.
	 * To return an INOUT parameter from a stored procedure,
	 * use the bitwise OR operator to set the PDO::PARAM_INPUT_OUTPUT bits
	 * for the <i>data_type</i> parameter.
	 * </p>
	 * @param int $length [optional] <p>
	 * Length of the data type. To indicate that a parameter is an OUT
	 * parameter from a stored procedure, you must explicitly set the
	 * length.
	 * </p>
	 * @param mixed $driver_options [optional] <p>
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function bindParam ($parameter, &$variable, $data_type = PDO::PARAM_STR, $length = null, $driver_options = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Bind a column to a PHP variable
	 * @link https://php.net/manual/en/pdostatement.bindcolumn.php
	 * @param mixed $column <p>
	 * Number of the column (1-indexed) or name of the column in the result set.
	 * If using the column name, be aware that the name should match the
	 * case of the column, as returned by the driver.
	 * </p>
	 * @param mixed $param <p>
	 * Name of the PHP variable to which the column will be bound.
	 * </p>
	 * @param int $type [optional] <p>
	 * Data type of the parameter, specified by the PDO::PARAM_* constants.
	 * </p>
	 * @param int $maxlen [optional] <p>
	 * A hint for pre-allocation.
	 * </p>
	 * @param mixed $driverdata [optional] <p>
	 * Optional parameter(s) for the driver.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function bindColumn ($column, &$param, $type = null, $maxlen = null, $driverdata = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 1.0.0)<br/>
	 * Binds a value to a parameter
	 * @link https://php.net/manual/en/pdostatement.bindvalue.php
	 * @param mixed $parameter <p>
	 * Parameter identifier. For a prepared statement using named
	 * placeholders, this will be a parameter name of the form
	 * :name. For a prepared statement using
	 * question mark placeholders, this will be the 1-indexed position of
	 * the parameter.
	 * </p>
	 * @param mixed $value <p>
	 * The value to bind to the parameter.
	 * </p>
	 * @param int $data_type [optional] <p>
	 * Explicit data type for the parameter using the PDO::PARAM_*
	 * constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function bindValue ($parameter, $value, $data_type = PDO::PARAM_STR) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Returns the number of rows affected by the last SQL statement
	 * @link https://php.net/manual/en/pdostatement.rowcount.php
	 * @return int the number of rows.
	 */
	public function rowCount () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.9.0)<br/>
	 * Returns a single column from the next row of a result set
	 * @link https://php.net/manual/en/pdostatement.fetchcolumn.php
	 * @param int $column_number [optional] <p>
	 * 0-indexed number of the column you wish to retrieve from the row. If
	 * no value is supplied, <b>PDOStatement::fetchColumn</b>
	 * fetches the first column.
	 * </p>
	 * @return mixed Returns a single column from the next row of a result
	 * set or FALSE if there are no more rows.
	 * </p>
	 * <p>
	 * There is no way to return another column from the same row if you
	 * use <b>PDOStatement::fetchColumn</b> to retrieve data.
	 */
	public function fetchColumn ($column_number = 0) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Returns an array containing all of the result set rows
	 * @link https://php.net/manual/en/pdostatement.fetchall.php
	 * @param int $fetch_style [optional] <p>
	 * Controls the contents of the returned array as documented in
	 * <b>PDOStatement::fetch</b>.
	 * Defaults to value of <b>PDO::ATTR_DEFAULT_FETCH_MODE</b>
	 * (which defaults to <b>PDO::FETCH_BOTH</b>)
	 * </p>
	 * <p>
	 * To return an array consisting of all values of a single column from
	 * the result set, specify <b>PDO::FETCH_COLUMN</b>. You
	 * can specify which column you want with the
	 * <i>column-index</i> parameter.
	 * </p>
	 * <p>
	 * To fetch only the unique values of a single column from the result set,
	 * bitwise-OR <b>PDO::FETCH_COLUMN</b> with
	 * <b>PDO::FETCH_UNIQUE</b>.
	 * </p>
	 * <p>
	 * To return an associative array grouped by the values of a specified
	 * column, bitwise-OR <b>PDO::FETCH_COLUMN</b> with
	 * <b>PDO::FETCH_GROUP</b>.
	 * </p>
	 * @param mixed $fetch_argument [optional] <p>
	 * This argument have a different meaning depending on the value of
	 * the <i>fetch_style</i> parameter:
	 * <p>
	 * <b>PDO::FETCH_COLUMN</b>: Returns the indicated 0-indexed
	 * column.
	 * </p>
	 * @param array $ctor_args [optional] <p>
	 * Arguments of custom class constructor when the <i>fetch_style</i>
	 * parameter is <b>PDO::FETCH_CLASS</b>.
	 * </p>
	 * @return array <b>PDOStatement::fetchAll</b> returns an array containing
	 * all of the remaining rows in the result set. The array represents each
	 * row as either an array of column values or an object with properties
	 * corresponding to each column name.
	 * </p>
	 * <p>
	 * Using this method to fetch large result sets will result in a heavy
	 * demand on system and possibly network resources. Rather than retrieving
	 * all of the data and manipulating it in PHP, consider using the database
	 * server to manipulate the result sets. For example, use the WHERE and
	 * ORDER BY clauses in SQL to restrict results before retrieving and
	 * processing them with PHP.
	 */
	public function fetchAll ($fetch_style = null, $fetch_argument = null, array $ctor_args = array()) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.4)<br/>
	 * Fetches the next row and returns it as an object.
	 * @link https://php.net/manual/en/pdostatement.fetchobject.php
	 * @param string $class_name [optional] <p>
	 * Name of the created class.
	 * </p>
	 * @param array $ctor_args [optional] <p>
	 * Elements of this array are passed to the constructor.
	 * </p>
	 * @return mixed an instance of the required class with property names that
	 * correspond to the column names or <b>FALSE</b> on failure.
	 */
	public function fetchObject ($class_name = "stdClass", array $ctor_args = array()) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Fetch the SQLSTATE associated with the last operation on the statement handle
	 * @link https://php.net/manual/en/pdostatement.errorcode.php
	 * @return string Identical to <b>PDO::errorCode</b>, except that
	 * <b>PDOStatement::errorCode</b> only retrieves error codes
	 * for operations performed with PDOStatement objects.
	 */
	public function errorCode () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * Fetch extended error information associated with the last operation on the statement handle
	 * @link https://php.net/manual/en/pdostatement.errorinfo.php
	 * @return array <b>PDOStatement::errorInfo</b> returns an array of
	 * error information about the last operation performed by this
	 * statement handle. The array consists of the following fields:
	 * <tr valign="top">
	 * <td>Element</td>
	 * <td>Information</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>0</td>
	 * <td>SQLSTATE error code (a five characters alphanumeric identifier defined
	 * in the ANSI SQL standard).</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>1</td>
	 * <td>Driver specific error code.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>2</td>
	 * <td>Driver specific error message.</td>
	 * </tr>
	 */
	public function errorInfo () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * Set a statement attribute
	 * @link https://php.net/manual/en/pdostatement.setattribute.php
	 * @param int $attribute
	 * @param mixed $value
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setAttribute ($attribute, $value) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * Retrieve a statement attribute
	 * @link https://php.net/manual/en/pdostatement.getattribute.php
	 * @param int $attribute
	 * @return mixed the attribute value.
	 */
	public function getAttribute ($attribute) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * Returns the number of columns in the result set
	 * @link https://php.net/manual/en/pdostatement.columncount.php
	 * @return int the number of columns in the result set represented by the
	 * PDOStatement object. If there is no result set,
	 * <b>PDOStatement::columnCount</b> returns 0.
	 */
	public function columnCount () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * Returns metadata for a column in a result set
	 * @link https://php.net/manual/en/pdostatement.getcolumnmeta.php
	 * @param int $column <p>
	 * The 0-indexed column in the result set.
	 * </p>
	 * @return array|false an associative array containing the following values representing
	 * the metadata for a single column:
	 * </p>
	 * <table>
	 * Column metadata
	 * <tr valign="top">
	 * <td>Name</td>
	 * <td>Value</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>native_type</td>
	 * <td>The PHP native type used to represent the column value.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>driver:decl_type</td>
	 * <td>The SQL type used to represent the column value in the database.
	 * If the column in the result set is the result of a function, this value
	 * is not returned by <b>PDOStatement::getColumnMeta</b>.
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>flags</td>
	 * <td>Any flags set for this column.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>name</td>
	 * <td>The name of this column as returned by the database.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>table</td>
	 * <td>The name of this column's table as returned by the database.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>len</td>
	 * <td>The length of this column. Normally -1 for
	 * types other than floating point decimals.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>precision</td>
	 * <td>The numeric precision of this column. Normally
	 * 0 for types other than floating point
	 * decimals.</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>pdo_type</td>
	 * <td>The type of this column as represented by the
	 * PDO::PARAM_* constants.</td>
	 * </tr>
	 * </table>
	 * <p>
	 * Returns <b>FALSE</b> if the requested column does not exist in the result set,
	 * or if no result set exists.
	 */
	public function getColumnMeta ($column) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * Set the default fetch mode for this statement
	 * @link https://php.net/manual/en/pdostatement.setfetchmode.php
	 * @param int $mode <p>
	 * The fetch mode must be one of the PDO::FETCH_* constants.
	 * </p>
	 * @param string|object $classNameObject [optional] <p>
	 * Class name or object
	 * </p>
	 * @param array $ctorarfg [optional] <p> Constructor arguments. </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setFetchMode ($mode, $classNameObject = null, array $ctorarfg = array()) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * Advances to the next rowset in a multi-rowset statement handle
	 * @link https://php.net/manual/en/pdostatement.nextrowset.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function nextRowset () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.9.0)<br/>
	 * Closes the cursor, enabling the statement to be executed again.
	 * @link https://php.net/manual/en/pdostatement.closecursor.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function closeCursor () {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.9.0)<br/>
	 * Dump an SQL prepared command
	 * @link https://php.net/manual/en/pdostatement.debugdumpparams.php
	 * @return bool No value is returned.
	 */
	public function debugDumpParams () {}

	final public function __wakeup () {}

	final public function __sleep () {}

}

final class PDORow  {
}

/**
 * (PHP 5 &gt;= 5.1.3, PHP 7, PECL pdo &gt;= 1.0.3)<br/>
 * Return an array of available PDO drivers
 * @link https://php.net/manual/en/pdo.getavailabledrivers.php
 * @return array <b>PDO::getAvailableDrivers</b> returns an array of PDO driver names. If
 * no drivers are available, it returns an empty array.
 */
function pdo_drivers () {}

// End of PDO v.1.0.4dev
?>
