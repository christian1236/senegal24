package connexion;

import java.sql.Connection;
import java.sql.DriverManager;

public class ConnexionBD {
	private static Connection connection;
	static {
		try {
			Class.forName("com.mysql.jdbc.Driver").newInstance();
			    String url    = "jdbc:mysql://localhost:3306/mglsi_news";
			    String username = "root";
			    String password = "";
			//java.sql.Driver con = new com.mysql.jdbc.Driver();
			connection=DriverManager.getConnection(url,username,password);
		}catch(Exception e) {
			e.printStackTrace();
		}
		
	}
	public static Connection getConnection() {
		return connection;
	}


}
