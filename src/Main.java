
public class Main {
	private String val;
	public Main(int val) {
		this.val = String.valueOf(val);
	}
	
	public Main(String val) {
		
		this.val = val;
	}
	
	public String toString() {
		return this.val;
	}
	
	public Main abs( 
		if (this.val.charAt(0) == '-') {
			return new Main(this.val.substring(1));
		}
		return new Main(this.val);
	}
}
