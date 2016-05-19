
public class MyInt {
	
	private byte IS_MORE = 1;
	private byte IS_LESS = -1;
	private byte IS_EQUAL = 0;
	
	
	private String val;
	public MyInt(int val) {
		this.val = String.valueOf(val);
	}
	
	public MyInt(String val) {
		/*
		boolean is_negative = (val.charAt(0) == '-');

		if (is_negative) {
			val = val.substring(1);
		}
		
		while (val.charAt(0) == '0') {
			if (val.length() > 1)
			val = val.substring(1);
		}			
		
		if (is_negative) {
			val = "-" + val;
		}
	*/
		this.val = val;
	}
	
	public String toString() {
		return this.val;
	}
	
	public MyInt abs() {
		if (this.val.charAt(0) == '-') {
			return new MyInt(this.val.substring(1));
		}
		return new MyInt(this.val);
	}
	
	public MyInt max(MyInt val) {
		boolean a_negative = (this.val.charAt(0) == '-');
		boolean b_negative = (val.toString().charAt(0) == '-');
		
		if (a_negative && !b_negative) return new MyInt(val.toString());
		if (!a_negative && b_negative) return new MyInt(this.val);
		
		
		if (a_negative && b_negative) {
			MyInt a = this.abs();
			MyInt b = val.abs();
			return new MyInt(a.min(b).toString());
		}
		
		
		int ourLength = this.val.length();
		int valLength = val.toString().length();
		
		if (ourLength > valLength) {
			return new MyInt(this.val);
		} else {
			if (ourLength < valLength) {
				return new MyInt(val.toString());
			} else {
				for (int i = 0; i < ourLength; i++) {
					int a = Character.getNumericValue(this.val.charAt(i));
					int b = Character.getNumericValue(val.toString().charAt(i));
					if (a > b) {
						return new MyInt(this.val);
					} else {
						if (a < b) {
							return new MyInt(val.toString());	
						}
					}
				}
				return new MyInt(0);
			}
		}
	}
	
	public MyInt min(MyInt val) {
		boolean a_negative = (this.val.charAt(0) == '-');
		boolean b_negative = (val.toString().charAt(0) == '-');
		
		if (a_negative && !b_negative) return new MyInt(this.val);
		if (!a_negative && b_negative) return new MyInt(val.toString());
		
		
		if (a_negative && b_negative) {
			MyInt a = this.abs();
			MyInt b = val.abs();
			return new MyInt(a.max(b).toString());
		}
		
		
		int ourLength = this.val.length();
		int valLength = val.toString().length();
		
		if (ourLength < valLength) {
			return new MyInt(this.val);
		} else {
			if (ourLength > valLength) {
				return new MyInt(val.toString());
			} else {
				for (int i = 0; i < ourLength; i++) {
					int a = Character.getNumericValue(this.val.charAt(i));
					int b = Character.getNumericValue(val.toString().charAt(i));
					if (a < b) {
						return new MyInt(this.val);
					} else {
						if (a > b) {
							return new MyInt(val.toString());	
						}
					}
				}
				return new MyInt(0);
			}
		}
	}
	
	
	public byte compareTo(MyInt val) {
		boolean a_negative = (this.val.charAt(0) == '-');
		boolean b_negative = (val.toString().charAt(0) == '-');
		
		if (a_negative && !b_negative) return IS_LESS;
		if (!a_negative && b_negative) return IS_MORE;
		
		
		if (a_negative && b_negative) {
			MyInt a = this.abs();
			MyInt b = val.abs();

			if (a.toString().equals(b.toString())) {
				return IS_EQUAL;
			}
			
			MyInt min = a.min(b);
			
			if (a.toString().equals(min.toString())) {
				return IS_MORE;
			}
			
			if (b.toString().equals(min.toString())) {
				return IS_LESS;
			}
		}
		
		MyInt max = this.max(val);
		
		if (this.toString().equals(val.toString())) {
			return IS_EQUAL;
		}
		
		if (this.toString().equals(max.toString())) {
			return IS_MORE;
		}
		
		if (this.toString().equals(max.toString())) {
			return IS_LESS;
		}
		
		return IS_EQUAL;
	}
	
	public MyInt subtract(MyInt val) {
		boolean a_negative = (this.val.charAt(0) == '-');
		boolean b_negative = (val.toString().charAt(0) == '-');
		
		if (a_negative && !b_negative) {
			return new MyInt("-" + this.abs().add(val).toString());
		}
		
		if (!a_negative && b_negative) {
			return new MyInt(this.add(val.abs()).toString());
		}
		
		if (a_negative && b_negative) {
			MyInt a = this.abs();
			MyInt b = val.abs();
			
			MyInt max = a.max(b);
			MyInt min = a.min(b);
			MyInt sub =  max.subtract(min);
			
			if (max.toString().equals(a.toString())) {
				return new MyInt("-" + sub.toString());
			} else {
				return new MyInt(sub.toString());
			}
		}
		
		
		MyInt max = this.max(val);
		MyInt min = this.min(val);
		
		String newVal = "";
		boolean vume = false;
		
		StringBuffer buffer = new StringBuffer(max.toString());
	    max = new MyInt(buffer.reverse().toString());
	    
	    buffer = new StringBuffer(min.toString());
	    
	    min = new MyInt(buffer.reverse().toString());
	    
	    
		
		
		for (int i = 0; i < max.toString().length(); i++) {
			int high = Character.getNumericValue(max.toString().charAt(i));
			int low = 0;
			int total;
			
			if (i < min.toString().length()) {
				low = Character.getNumericValue(min.toString().charAt(i));
			}
			
			if (vume) {
				high--;
				vume = false;
			}
			

			if (high >= low) {
				total = high - low;
			} else {
				total = (10 + high) - low;
				vume = true;
			}

			newVal = String.valueOf(total) + newVal;
			
		}
		
		if (this.compareTo(val) == IS_LESS) {
			newVal = "-" + newVal;
		}
		
		return new MyInt(newVal);
	}
	
	public MyInt add(MyInt val) {
		boolean a_negative = (this.val.charAt(0) == '-');
		boolean b_negative = (val.toString().charAt(0) == '-');
		
		MyInt min;
		MyInt max;
		
		
		if (a_negative && !b_negative) {			
			if (this.abs().compareTo(val) == IS_MORE) {
				return new MyInt("-" + this.abs().subtract(val));
			}
			if (this.abs().compareTo(val) == IS_LESS) {
				return new MyInt("-" + val.subtract(this.abs()));
			}
			return new MyInt("0");
		}
		if (!a_negative && b_negative) {			
			if (val.abs().compareTo(this) == IS_MORE) {
				return new MyInt("-" + val.abs().subtract(this));
			}
			if (val.abs().compareTo(this) == IS_LESS) {
				return new MyInt("-" + this.subtract(val.abs()));
			}
			return new MyInt("0");
		}		
		
		
		
		if (a_negative && b_negative) {
			this.val = this.abs().toString();
			val = val.abs();
		}
		
		min = this.min(val);
		max = this.max(val);
		
		
		StringBuffer buffer = new StringBuffer(max.toString());
	    max = new MyInt(buffer.reverse().toString());
	    
	    buffer = new StringBuffer(min.toString());
	    
	    min = new MyInt(buffer.reverse().toString());		
		
		
		String newVal = "";
		boolean vume = false;
		for (int i = 0; i < max.toString().length(); i++) {
			int high = Character.getNumericValue(max.toString().charAt(i));
			int low = 0;
			
			if (i < min.toString().length()) {
				low = Character.getNumericValue(min.toString().charAt(i));
			}
			
			
			int total = high + low;
			
			if (vume) {
				vume = false;
				total++;
			}
			
			if (total > 9) {
				newVal = String.valueOf(total - 10) + newVal;
				vume = true;
			} else {
				newVal = String.valueOf(total) + newVal;
			}
			
		}
		
		if (vume) {
			vume = false;
			newVal = "1" + newVal;
		}
		
		if (a_negative && b_negative) {
			newVal = "-" + newVal;
		}
		
		return new MyInt(newVal);
	}
	
}
