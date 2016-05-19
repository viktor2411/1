
public class MyIntTest {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		MyInt a = new MyInt(100);
		MyInt b = new MyInt("-230");
		MyInt c = new MyInt(196);
		MyInt d = new MyInt(37);
		MyInt e = new MyInt(-50); MyInt f = new MyInt(150);
		MyInt g = new MyInt(100); MyInt h = new MyInt(-230);
		MyInt i = new MyInt(900); MyInt j = new MyInt(371);
		
		MyInt k = new MyInt(-100); MyInt l = new MyInt(-230);
		
		
		System.out.println(a.add(b).toString().equals("-130"));
		
		System.out.println(c.subtract(d).toString().equals("159"));
		System.out.println(e.subtract(f).toString().equals("-200"));
		System.out.println(g.subtract(h).toString().equals("330"));
		System.out.println(i.add(j).toString().equals("1271"));
		
		System.out.println(k.subtract(l).toString().equals("130"));
		System.out.println(l.subtract(k).toString().equals("-130"));
		
	
	
	}

}
